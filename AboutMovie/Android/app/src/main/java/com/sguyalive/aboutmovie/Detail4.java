package com.sguyalive.aboutmovie;

import android.content.Context;
import android.content.Intent;
import android.graphics.drawable.Drawable;
import android.os.Bundle;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;

import com.sguyalive.aboutmovie.Adapter.ContactAdapter;
import com.sguyalive.aboutmovie.Model.ContactModel;

import java.io.IOException;
import java.io.InputStream;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.ArrayList;

public class Detail4 extends AppCompatActivity {

    private String path = "https://www.img.in.th/images/c6e39332ee3dcc086fe7b6a3ed14b6e4.jpg";
    private ImageView imageView;
    private ArrayList<ContactModel> dataset;
    private ContactAdapter adapter;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detail4);

        ActionBar actionBar = getSupportActionBar();
        actionBar.setDisplayShowHomeEnabled(true);
        actionBar.setIcon(R.drawable.hlg);
        actionBar.setDisplayShowTitleEnabled(false);

        Drawable image = ImageOperations(this, path, "image.jpg");
        imageView = new ImageView(this);
        imageView = (ImageView)findViewById(R.id.movie);
        imageView.setImageDrawable(image);
        dataset = new ArrayList<ContactModel>();

        //4.new Adapter
        adapter = new ContactAdapter(dataset);

        //5.call RecyclerView
        RecyclerView rcy = (RecyclerView)findViewById(R.id.RCVData);

        //6.Set adapter of RecyclerView
        rcy.setLayoutManager(new LinearLayoutManager(this));
        rcy.setAdapter(adapter);

        ServerConnector connector = new ServerConnector();
        String result = connector.connect("index.php",true);
    }

    private Drawable ImageOperations(Context ctx, String url, String saveFilename) {
        try {
            InputStream is = (InputStream) this.fetch(url);
            Drawable d = Drawable.createFromStream(is, "src");
            return d;
        } catch (MalformedURLException e) {
            return null;
        } catch (IOException e) {
            return null;
        }
    }

    public Object fetch(String address) throws MalformedURLException,IOException {
        URL url = new URL(address);
        Object content = url.getContent();
        return content;
    }
    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);

        //check ResultCode
        if (requestCode == 1){
            //check ResultCode
            if (resultCode == RESULT_OK){

                //7.Get data from intent object
                String review = data.getStringExtra("REVIEW");

                //8.Add to Data List
                dataset.add(new ContactModel(review));

                //9.Update adapter
                adapter.notifyDataSetChanged();
            }
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        //Adding our menu to toolbar
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    public void onClickcreate(View v){

        Intent dointent = new Intent(this,CreateActivity.class);
        startActivityForResult(dointent,1);
    }

}
