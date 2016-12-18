package com.sguyalive.aboutmovie;

/**
 * Created by sguyalive on 12/16/2016 AD.
 */

public class MyData {

    private int id;
    private String title,image_link,date;

    public MyData(int id, String title, String image_link,String date) {
        this.id = id;
        this.title = title;
        this.image_link = image_link;
        this.date = date;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getImage_link() {
        return image_link;
    }

    public void setImage_link(String image_link) {
        this.image_link = image_link;
    }

    public String getDate(){
        return date;
    }

    public void setDate(String date){
        this.date = date;
    }


}
