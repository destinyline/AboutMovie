package com.sguyalive.aboutmovie;

import android.content.Context;
import android.content.Intent;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;

import java.util.ArrayList;

/**
 * Created by sguyalive on 12/16/2016 AD.
 */

public class CustomAdapter extends RecyclerView.Adapter<CustomAdapter.ViewHolder> {

    private Context context;
    private static ArrayList<MyData> my_data;

    public CustomAdapter(Context context, ArrayList<MyData> my_data) {
        this.context = context;
        this.my_data = my_data;
    }

    @Override
    public CustomAdapter.ViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {

        View itemView = LayoutInflater.from(parent.getContext()).inflate(R.layout.cardview,null);

        ViewHolder viewHloder = new ViewHolder(itemView);
        return viewHloder;
    }

    @Override
    public void onBindViewHolder(CustomAdapter.ViewHolder viewHloder, final int position) {
        final MyData fp = my_data.get(position);

        viewHloder.title.setText(my_data.get(position).getTitle());
        viewHloder.date.setText(my_data.get(position).getDate());
        Glide.with(context).load(my_data.get(position).getImage_link()).into(viewHloder.imageView);

        viewHloder.feed = fp;

        viewHloder.currentItem = my_data.get(position);

        viewHloder.btnreview.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                switch (position){
                    case 0:
                        Intent intent0=new Intent(v.getContext(),Detail1.class);
                        v.getContext().startActivity(intent0);
                        break;
                    case 1:
                        Intent intent1=new Intent(v.getContext(),Detail2.class);
                        v.getContext().startActivity(intent1);
                        break;
                    case 2:
                        Intent intent2=new Intent(v.getContext(),Detail3.class);
                        v.getContext().startActivity(intent2);
                        break;
                    case 3:
                        Intent intent3=new Intent(v.getContext(),Detail4.class);
                        v.getContext().startActivity(intent3);
                        break;
                    case 4:
                        Intent intent4=new Intent(v.getContext(),Detail5.class);
                        v.getContext().startActivity(intent4);
                        break;
                    case 5:
                        Intent intent5=new Intent(v.getContext(),Detail6.class);
                        v.getContext().startActivity(intent5);
                        break;
                    case 6:
                        Intent intent6=new Intent(v.getContext(),Detail7.class);
                        v.getContext().startActivity(intent6);
                        break;
                    case 7:
                        Intent intent7=new Intent(v.getContext(),Detail8.class);
                        v.getContext().startActivity(intent7);
                        break;
                    case 8:
                        Intent intent8=new Intent(v.getContext(),Detail9.class);
                        v.getContext().startActivity(intent8);
                        break;
                }


            }

        });
    }

    @Override
    public int getItemCount() {
        return my_data.size();
    }

    public  class ViewHolder extends  RecyclerView.ViewHolder{

        public TextView title;
        public TextView date;
        public ImageView imageView;
        public Button btnreview;

        public MyData feed;

        public MyData currentItem;

        public ViewHolder(final View itemView) {
            super(itemView);

            title = (TextView) itemView.findViewById(R.id.titlemovie);
            date = (TextView) itemView.findViewById(R.id.date);
            imageView = (ImageView) itemView.findViewById(R.id.image);
            btnreview = (Button) itemView.findViewById(R.id.btnreview);

        }
    }

}
