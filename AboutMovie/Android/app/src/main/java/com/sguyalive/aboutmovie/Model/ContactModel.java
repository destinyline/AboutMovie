package com.sguyalive.aboutmovie.Model;

/**
 * Created by dream on 12/18/2016.
 */
public class ContactModel {
    private String review;
//    private String topic_detail;

    public ContactModel(String review) {
        this.review = review;

    }

    public String getReview() {
        return review;
    }

    public void setReview(String review) {
        this.review = review;
    }
}
