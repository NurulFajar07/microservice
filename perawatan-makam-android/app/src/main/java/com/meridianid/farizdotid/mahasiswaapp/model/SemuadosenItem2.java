package com.meridianid.farizdotid.mahasiswaapp.model;

import com.google.gson.annotations.SerializedName;

public class SemuadosenItem2 {

	@SerializedName("nama")
	private String nama;

	@SerializedName("no_hp")
	private String id;

	@SerializedName("tanggal")
	private String matkul;

	public void setNama(String nama){
		this.nama = nama;
	}

	public String getNama(){
		return nama;
	}

	public void setId(String id){
		this.id = id;
	}

	public String getId(){
		return id;
	}

	public void setMatkul(String matkul){
		this.matkul = matkul;
	}

	public String getMatkul(){
		return matkul;
	}

	@Override
 	public String toString(){
		return 
			"SemuadosenItem{" + 
			"nama = '" + nama + '\'' + 
			",id = '" + id + '\'' + 
			",matkul = '" + matkul + '\'' + 
			"}";
		}
}