<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Home extends BaseController
{
    public function index()
    {
        
        if(session()->get('id')>0 ) {
            return redirect()->to('/home/dashboard');
        }else{

            $model=new M_model();
            echo view('login');
        }
    }

    public function aksi_login()
    {
        $n=$this->request->getPost('username'); 
        $p=$this->request->getPost('password');
        $model= new M_model();
        $data=array(
            'username'=>$n, 
            'password'=>md5($p)
        );
        $cek=$model->getarray('user', $data);
        if ($cek>0) {

            session()->set('id', $cek['id_user']);
            session()->set('username', $cek['username']);
            session()->set('level', $cek['level']);
            return redirect()->to('/home/dashboard');

    //     }else {
    //     return redirect()->to('/');
    // }
        }
    }
    public function log_out()
    {
        // if(session()->get('id')>0) {

     session()->destroy();
     return redirect()->to('/');

    //  }else{
    //     return redirect()->to('/home/dashboard');
    // }
 }
 public function dashboard()
 {
        // if(session()->get('id')>0) {

    $model= new M_model();

    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where); 

    echo view ('header', $kui);
    echo view ('menu');
    echo view ('dashboard');
    echo view ('footer');
    //      }else{
    //     return redirect()->to('/');
    // }
}
public function pengguna()
{
    // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) {

    $model = new M_model();
    $on='pengguna.id_user_user=user.id_user';
    $kui['ferdi'] = $model->fusionleft('pengguna', 'user', $on, );

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where); 

    // $id = session()->get('id');
    // $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu');
    echo view('pengguna');
    echo view('footer');
    // }else{
    // return redirect()->to('/home/dashboard');
    // }
}
public function hapus_pengguna($id)
{
    // if(session()->get('level')== 1) {

    $model=new M_model();
    $where2=array('id_user'=>$id);
    $where=array('id_user_user'=>$id);
    $model->hapus('pengguna',$where);
    $model->hapus('user',$where2);
    return redirect()->to('/home/pengguna');

    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function tambah_pengguna()
{
        // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) {

    $model=new M_model();
    $on='pengguna.id_user_user=user.id_user';
    $kui['duar']=$model->fusionleft('pengguna',  'user', $on, );

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

    $where=array('id_user' => session()->get('id'));
        // $kui['user']=$model->getRow('user',$where);

    echo view('header',$kui);
    echo view('menu');
    echo view('tambah_pengguna');
    echo view('footer');

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function aksi_tambah_pengguna()
{
    $model=new M_model();

    $nama=$this->request->getPost('nama');
    $nik=$this->request->getPost('nik');    
    $ttl=$this->request->getPost('ttl');
    $jk=$this->request->getPost('jk');
    $alamat=$this->request->getPost('alamat');
    $username=$this->request->getPost('username');
    $password=$this->request->getPost('password');
    $level=$this->request->getPost('level');
    $id_user=session()->get('id');
    
    $user=array(
        'username'=>$username,
        'password'=>md5($password),
        'level'=>$level,
    );

    $model=new M_model();
    $model->simpan('user', $user);
    $where=array('username'=>$username);
    $id=$model->getarray('user', $where);
    $iduser = $id['id_user'];

    $pengguna=array(
        'nama'=>$nama,
        'nik'=>$nik,
        'ttl'=>$ttl,
        'jk'=>$jk,
        'alamat'=>$alamat,

        'id_user_user'=>$iduser,
        // 'tanggal_pgu'=>date('Y-m-d')
    );
    // print_r($pengguna);
    $model->simpan('pengguna', $pengguna);
    return redirect()->to('/home/pengguna');
}
public function edit_pengguna($id)
{
        // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) {

    $model=new M_model();
    $where2=array('pengguna.id_user_user'=>$id);
    $on=('pengguna.id_user_user=user.id_user');
    $kui['duar']=$model->fusion_Row('pengguna', 'user',$on,$where2);

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

    echo view('header',$kui);
    echo view('menu');
    echo view('edit_pengguna');
    echo view('footer');

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function aksi_edit_pengguna()
{
    $id= $this->request->getPost('id');
    $nama=$this->request->getPost('nama');
    $nik=$this->request->getPost('nik');
    $ttl=$this->request->getPost('ttl');
    $jk=$this->request->getPost('jk');
    $alamat=$this->request->getPost('alamat');
    $username=$this->request->getPost('username');
    $level=$this->request->getPost('level');
    // $iduser=session()->get('id');

    $where=array('id_user'=>$id); 
    $where2=array('id_user_user'=>$id);   
    if ($password !='') {
        $user=array(
            'username'=>$username,
            'level'=>$level,
        );
    }else{
        $user=array(
            'username'=>$username,
            'level'=>$level,
        );
    }
    
    $model=new M_model();
    $model->edit('user', $user,$where);

    $pengguna=array(
        'nama'=>$nama,
        'nik'=>$nik,
        'ttl'=>$ttl,
        'jk'=>$jk,
        'alamat'=>$alamat,
        // 'id_user_user'=>$iduser
    );
    // print_r($user);
    // print_r($pengguna);
    $model->edit('pengguna', $pengguna, $where2);
    return redirect()->to('/home/pengguna');
}
    // -----------------------------------------------------------------------------------------------------------
public function penitipan()
    {
 // if(session()->get('level')== 1 || session()->get('level')== 3) {

        $model = new M_model();
        $on='penitipan.id_anak=anak.id_anak';
        $kui['ferdi'] = $model->tampil('penitipan');

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        echo view('header', $kui);
        echo view('menu');
        echo view('penitipan');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }
public function hapus_penitipan($id)
{
    // if(session()->get('level')== 1) {

    $model=new M_model();
    $where=array('id_penitipan'=>$id);
    $model->hapus('penitipan',$where);
    return redirect()->to('/home/penitipan');

    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function tambah_penitipan()
    {
        // if(session()->get('level')== 4) {

        $model=new M_model();
        $on='penitipan.id_anak=anak.id_anak';
        $kui['ferdi'] = $model->fusion('penitipan', 'anak',$on);

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        $kui['apa'] = $model->tampil('anak');

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_penitipan',$kui);
        echo view('footer');
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function aksi_tambah_penitipan()
    {
        $model=new M_model();
        $id_anak=$this->request->getPost('id_anak');
        $ruang=$this->request->getPost('ruang');
        $tanggal=$this->request->getPost('tanggal');
        $data=array(
            'id_anak'=>$id_anak,
            'ruang'=>$ruang,
            'tanggal'=>$tanggal,
        );
        $model->simpan('penitipan',$data);
        return redirect()->to('/home/penitipan');
    }
    public function edit_penitipan($id)
    {
        // if(session()->get('level')== 4) {

        $model=new M_model();
        $where=array('id_penitipan'=>$id);
        $kui['ferdi']=$model->getRow('penitipan', $where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        $kui['apa'] = $model->tampil('anak');


        // $where=array('id_user' => session()->get('id'));

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('edit_penitipan',$kui);
        echo view('footer');

//     }else{
//         return redirect()->to('/home/dashboard');
//     }
    }
    public function aksi_edit_penitipan()
    {
        $model=new M_model();
        $id=$this->request->getPost('id');
         $id_anak=$this->request->getPost('id_anak');
        $ruang=$this->request->getPost('ruang');
        $tanggal=$this->request->getPost('tanggal');
        $data=array(
            'id_anak'=>$id_anak,
            'ruang'=>$ruang,
            'tanggal'=>$tanggal,
        );
        $where=array('id_penitipan'=>$id);
        $model->edit('penitipan',$data,$where);
        return redirect()->to('/home/penitipan');
    }
//-----------------------------------------------------------------------------------------------------------------------------
    public function anak()
{
 // if(session()->get('level')== 1 || session()->get('level')== 3) {

    $model = new M_model();
    $kui['ferdi'] = $model->tampil('anak');

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

    echo view('header', $kui);
    echo view('menu');
    echo view('anak');
    echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
}
public function hapus_anak($id)
{
    // if(session()->get('level')== 1) {

    $model=new M_model();
    $where=array('id_anak'=>$id);
    $model->hapus('anak',$where);
    return redirect()->to('/home/anak');

    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function tambah_anak()
{
        // if(session()->get('level')== 4) {

    $model=new M_model();
    $kui['ferdi']=$model->tampil('anak');

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

    echo view('header',$kui);
    echo view('menu',$kui);
    echo view('tambah_anak',$kui);
    echo view('footer');
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function aksi_tambah_anak()
{
    $model=new M_model();
    $nama=$this->request->getPost('nama');
    $umur=$this->request->getPost('umur');
    $nama_ortu=$this->request->getPost('nama_ortu');
    $tanggal=$this->request->getPost('tanggal');
    $data=array(
       
        'nama'=>$nama,
        'umur'=>$umur,
        'nama_ortu'=>$nama_ortu,
        'tanggal'=>$tanggal,
    );
        $model = new M_model();
        $model->simpan('anak',$data);
        return redirect()->to('/home/anak');
}

public function edit_anak($id)
{
        // if(session()->get('level')== 4) {

    $model=new M_model();
    $where=array('id_anak'=>$id);
    $kui['ferdi']=$model->getRow('anak', $where);

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

        // $where=array('id_user' => session()->get('id'));

    echo view('header',$kui);
    echo view('menu',$kui);
    echo view('edit_anak',$kui);
    echo view('footer');

//     }else{
//         return redirect()->to('/home/dashboard');
//     }
}
public function aksi_edit_anak()
{
    $model=new M_model();
    $id=$this->request->getPost('id');
    $nama=$this->request->getPost('nama');
    $umur=$this->request->getPost('umur');
    $nama_ortu=$this->request->getPost('nama_ortu');
    $tanggal=$this->request->getPost('tanggal');
    $data=array(
        'nama'=>$nama,
        'umur'=>$umur,
        'nama_ortu'=>$nama_ortu,
        'tanggal'=>$tanggal,
    );
        $where=array('id_anak'=>$id);
        $model->edit('anak',$data,$where);
        return redirect()->to('/home/anak');
        
    }

// ----------------------------------------------------------------------------------------------------------------------------
    public function pembayaran()
    {
 // if(session()->get('level')== 1 || session()->get('level')== 3) {

        $model = new M_model();
        $on='pembayaran.id_anak=anak.id_anak';
        $kui['ferdi'] = $model->tampil('pembayaran');

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        echo view('header', $kui);
        echo view('menu');
        echo view('pembayaran');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }
    public function hapus_pembayaran($id)
    {
    // if(session()->get('level')== 1) {

        $model=new M_model();
        $where=array('id_pembayaran'=>$id);
        $model->hapus('pembayaran',$where);
        return redirect()->to('/home/pembayaran');

    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function tambah_pembayaran()
    {
        // if(session()->get('level')== 4) {

        $model=new M_model();
        $on='pembayaran.id_anak=anak.id_anak';
        $kui['ferdi'] = $model->fusion('pembayaran', 'anak',$on);

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        $kui['apa'] = $model->tampil('anak');


        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_pembayaran',$kui);
        echo view('footer');
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function aksi_tambah_pembayaran()
    {
        $model=new M_model();
        $id_anak=$this->request->getPost('id_anak');
        $bulan=$this->request->getPost('bulan');
        $harga=$this->request->getPost('harga');
        $tanggal_bayar=$this->request->getPost('tanggal_bayar');
        $data=array(
            'id_anak'=>$id_anak,
            'bulan'=>$bulan,
            'harga'=>$harga,
            'tanggal_bayar'=>$tanggal_bayar,
        );
        $model->simpan('pembayaran',$data);
        return redirect()->to('/home/pembayaran');
    }
    public function edit_pembayaran($id)
    {
        // if(session()->get('level')== 4) {

        $model=new M_model();
        $where=array('id_pembayaran'=>$id);
        $kui['ferdi']=$model->getRow('pembayaran', $where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        $kui['apa'] = $model->tampil('anak');


        // $where=array('id_user' => session()->get('id'));

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('edit_pembayaran',$kui);
        echo view('footer');

//     }else{
//         return redirect()->to('/home/dashboard');
//     }
    }
    public function aksi_edit_pembayaran()
    {
        $model=new M_model();
        $id=$this->request->getPost('id');
        $id_anak=$this->request->getPost('id_anak');
        $bulan=$this->request->getPost('bulan');
        $harga=$this->request->getPost('harga');
        $tanggal_bayar=$this->request->getPost('tanggal_bayar');
        $data=array(
            'id_anak'=>$id_anak,
            'bulan'=>$bulan,
            'harga'=>$harga,
            'tanggal_bayar'=>$tanggal_bayar,
        );
        $where=array('id_pembayaran'=>$id);
        $model->edit('pembayaran',$data,$where);
        return redirect()->to('/home/pembayaran');
    }

    //-----------------------------------------------------------------------------------------------------------------
    public function laporan_pembayaran()
    {
        // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $kui['kunci']='view_pembayaran';

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);
        // $kui['user']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('filter',$kui);
        echo view('footer');
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function cari_pembayaran()
    {
        // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_pembayaran('pembayaran',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['user'] = base64_encode($img);

        echo view('c_pembayaran',$kui);
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function pdf_pembayaran()
    {
        // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_pembayaran('pembayaran',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['user'] = base64_encode($img);

        $dompdf = new\Dompdf\Dompdf();
        $dompdf->setPaper('A4','landscape');
        $dompdf->loadHtml(view('c_pembayaran',$kui));
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function excel_pembayaran()
{
    // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

    $model = new M_model();
    $awal = $this->request->getPost('awal');
    $akhir = $this->request->getPost('akhir');
    $data = $model->filter_pembayaran('pembayaran', $awal, $akhir);

    $spreadsheet = new Spreadsheet();

    $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'Nama Anak')
        ->setCellValue('B1', 'Bulan')
        ->setCellValue('C1', 'Harga')
        ->setCellValue('D1', 'Tanggal');

    $column = 2;

    foreach ($data as $data_row) { // Ubah nama variabel agar tidak bentrok dengan variabel foreach sebelumnya
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A' . $column, $data_row->id_anak)
            ->setCellValue('B' . $column, $data_row->bulan)
            ->setCellValue('C' . $column, $data_row->harga)
            ->setCellValue('D' . $column, $data_row->tanggal);

        $column++;
    }

    $writer = new Xlsx($spreadsheet);
    $fileName = 'Laporan Pembayaran.xlsx'; // Ubah ekstensi file menjadi .xlsx

    header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $fileName . '"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
// }else{
//     return redirect()->to('/home/dashboard');
// }
}
}
