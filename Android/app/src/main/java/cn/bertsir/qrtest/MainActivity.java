package cn.bertsir.qrtest;

import android.graphics.Color;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import cn.bertsir.zbar.QrConfig;
import cn.bertsir.zbar.QrManager;


public class MainActivity extends AppCompatActivity implements View.OnClickListener {

    private Button bt_scanr;
    private Button bt_scani;
    private static final String TAG = "MainActivity";
    public String code;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        initView();
    }

    private void initView() {
        bt_scanr = (Button) findViewById(R.id.bt_scanr);
        bt_scanr.setOnClickListener(this);
        bt_scani = (Button) findViewById(R.id.bt_scani);
        bt_scani.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        switch (v.getId()) {
            case R.id.bt_scanr:
                start("入库");
                code="in";
                break;
            case R.id.bt_scani:
                start("出库");
                code="ou";
                break;
        }
    }

    private void start(String title) {
        int scan_type ;
        int scan_view_type;
        scan_type = QrConfig.TYPE_ALL;
        scan_view_type = QrConfig.SCANVIEW_TYPE_QRCODE;
        QrConfig qrConfig = new QrConfig.Builder()
                .setDesText("条码")//扫描框下文字
                .setShowDes(true)//是否显示扫描框下面文字
                .setShowLight(true)//显示手电筒按钮
                .setShowTitle(true)//显示Title
                .setShowAlbum(true)//显示从相册选择按钮
                .setCornerColor(Color.parseColor("#E42E30"))//设置扫描框颜色
                .setLineColor(Color.parseColor("#E42E30"))//设置扫描线颜色
                .setLineSpeed(QrConfig.LINE_MEDIUM)//设置扫描线速度
                .setScanType(2)//设置扫码类型（二维码，条形码，全部，自定义，默认为二维码）
                .setScanViewType(2)//设置扫描框类型（二维码还是条形码，默认为二维码）
                .setCustombarcodeformat(QrConfig.BARCODE_EAN13)//此项只有在扫码类型为TYPE_CUSTOM时才有效
                .setPlaySound(true)//是否扫描成功后bi~的声音
                .setDingPath(R.raw.qrcode)//设置提示音(不设置为默认的Ding~)
                .setIsOnlyCenter(true)//是否只识别框中内容(默认为全屏识别)
                .setTitleText(title)//设置Tilte文字
                .setTitleBackgroudColor(Color.parseColor("#262020"))//设置状态栏颜色
                .setTitleTextColor(Color.WHITE)//设置Title文字颜色
                .create();

        QrManager.getInstance().init(qrConfig).startScan(MainActivity.this, new QrManager.OnScanResultCallback() {
            @Override
            public void onScanSuccess(final String result) {
                if(code=="in"){
                    new Thread(new Runnable() {

                        @Override
                        public void run() {
                            getData.doGet("http://192.168.2.208/inOrder?code="+result);
                        }
                    }).start();
                }

                if(code=="ou"){
                    new Thread(new Runnable() {

                        @Override
                        public void run() {
                            getData.doGet("http://192.168.2.208/ouOrder?code="+result);
                        }
                    }).start();
                }


                Toast.makeText(getApplicationContext(),result, Toast.LENGTH_SHORT).show();
            }
        });
    }




}
