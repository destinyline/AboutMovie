package com.sguyalive.aboutmovie;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.EditText;

/**
 * Created by sguyalive on 12/11/2016 AD.
 */

public class CreateActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.create_screen);

        ActionBar actionBar = getSupportActionBar();
        actionBar.setDisplayShowHomeEnabled(true);
        actionBar.setIcon(R.drawable.hlg);
        actionBar.setDisplayShowTitleEnabled(false);
    }
    public void onClickAddToMain(View v) {
        //1.Get Data from EditText
        EditText edt_topicname = (EditText)findViewById(R.id.EDTtopic_name);


        //2.Convert text to string variable
        String review = edt_topicname.getText().toString();


        //3.Create Intent
        Intent dointent2 = new Intent();

        //4.Put data to intent object
        dointent2.putExtra("REVIEW",review);
        //name เป็นตัวเดียวกับข้างบน "NAME" เอาไว้ใช้เรียก


        //5.Send intent to result
        setResult(RESULT_OK,dointent2);
        //ตัวแรกเอาไว้ให้คุณเผื่อมีปุ่ม cancel แล้วจะส่งอะไรกลับไปด้วย

        //6.Finish and Close this activity
        finish();
    }
}
