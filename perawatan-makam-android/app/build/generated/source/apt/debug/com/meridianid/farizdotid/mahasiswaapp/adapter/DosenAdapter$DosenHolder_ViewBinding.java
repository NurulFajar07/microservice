// Generated code from Butter Knife. Do not modify!
package com.meridianid.farizdotid.mahasiswaapp.adapter;

import android.support.annotation.CallSuper;
import android.support.annotation.UiThread;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;
import butterknife.Unbinder;
import butterknife.internal.Utils;
import com.meridianid.farizdotid.mahasiswaapp.R;
import java.lang.IllegalStateException;
import java.lang.Override;

public class DosenAdapter$DosenHolder_ViewBinding implements Unbinder {
  private DosenAdapter.DosenHolder target;

  @UiThread
  public DosenAdapter$DosenHolder_ViewBinding(DosenAdapter.DosenHolder target, View source) {
    this.target = target;

    target.ivTextDrawable = Utils.findRequiredViewAsType(source, R.id.ivTextDrawable, "field 'ivTextDrawable'", ImageView.class);
    target.tvNamaDosen = Utils.findRequiredViewAsType(source, R.id.tvNamaDosen, "field 'tvNamaDosen'", TextView.class);
    target.tvNamaMatkul = Utils.findRequiredViewAsType(source, R.id.tvNamaMatkul, "field 'tvNamaMatkul'", TextView.class);
  }

  @Override
  @CallSuper
  public void unbind() {
    DosenAdapter.DosenHolder target = this.target;
    if (target == null) throw new IllegalStateException("Bindings already cleared.");
    this.target = null;

    target.ivTextDrawable = null;
    target.tvNamaDosen = null;
    target.tvNamaMatkul = null;
  }
}
