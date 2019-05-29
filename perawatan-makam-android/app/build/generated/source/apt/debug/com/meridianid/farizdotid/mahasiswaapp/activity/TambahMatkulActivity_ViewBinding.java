// Generated code from Butter Knife. Do not modify!
package com.meridianid.farizdotid.mahasiswaapp.activity;

import android.support.annotation.CallSuper;
import android.support.annotation.UiThread;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import butterknife.Unbinder;
import butterknife.internal.Utils;
import com.meridianid.farizdotid.mahasiswaapp.R;
import java.lang.IllegalStateException;
import java.lang.Override;

public class TambahMatkulActivity_ViewBinding implements Unbinder {
  private TambahMatkulActivity target;

  @UiThread
  public TambahMatkulActivity_ViewBinding(TambahMatkulActivity target) {
    this(target, target.getWindow().getDecorView());
  }

  @UiThread
  public TambahMatkulActivity_ViewBinding(TambahMatkulActivity target, View source) {
    this.target = target;

    target.spinnerDosen = Utils.findRequiredViewAsType(source, R.id.spinnerDosen, "field 'spinnerDosen'", Spinner.class);
    target.etNamaMatkul = Utils.findRequiredViewAsType(source, R.id.etNamaMatkul, "field 'etNamaMatkul'", EditText.class);
    target.btnSimpanMatkul = Utils.findRequiredViewAsType(source, R.id.btnSimpanMatkul, "field 'btnSimpanMatkul'", Button.class);
  }

  @Override
  @CallSuper
  public void unbind() {
    TambahMatkulActivity target = this.target;
    if (target == null) throw new IllegalStateException("Bindings already cleared.");
    this.target = null;

    target.spinnerDosen = null;
    target.etNamaMatkul = null;
    target.btnSimpanMatkul = null;
  }
}
