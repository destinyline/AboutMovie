package com.sguyalive.aboutmovie.Adapter;

import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;



import java.util.ArrayList;

import com.sguyalive.aboutmovie.Model.ContactModel;
import com.sguyalive.aboutmovie.R;

/**
 * Created by Lenovo_PC on 12/9/2559.
 */
public class ContactAdapter extends RecyclerView.Adapter {

    private ArrayList<ContactModel> dataset;

    public ContactAdapter(ArrayList<ContactModel> dataset) {
        this.dataset = dataset;
    }

    @Override
    public RecyclerView.ViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {

        View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.item_layout,parent,false);
        ContactViewHolder current = new ContactViewHolder(view);
        return current;
    }

    @Override
    public void onBindViewHolder(RecyclerView.ViewHolder holder, int position) {

        ContactModel model = dataset.get(position);

        ContactViewHolder cv_holder = (ContactViewHolder)holder;

        cv_holder.reviewmovie.setText(model.getReview());


    }

    @Override
    public int getItemCount() {
        return dataset.size();
    }

    class ContactViewHolder extends RecyclerView.ViewHolder {
        public TextView reviewmovie;
//        public TextView topic_detail;

        public ContactViewHolder(View itemView) {
            super(itemView);

            reviewmovie = (TextView)itemView.findViewById(R.id.TVName);
//            topic_detail = (TextView)itemView.findViewById(R.id.TVTel);
        }
    }
}