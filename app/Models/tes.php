<?php
//kamus
$kamus = \App\Models\Kamus::create([
    'prancis' => 'DIRECTION,INTENTION',
    'indonesia' => 'ARAH',
]);

//detail indo
$Dtl_indo_prc = \App\Models\Dtl_indo_prc::create([
    'kamus_id' => '1',
    'arti_prc' => 'INTENTION .F',
]);

$Dtl_indo_prc = \App\Models\Dtl_indo_prc::create([
    'kamus_id' => '1',
    'arti_prc' => 'DIRECTION .N',
]);

//contoh indo
$contoh_indo = \App\Models\Contoh_indo::create([
    'dtl_indo_prc_id' => '1',
    'contoh_indo' => 'dia berangkat ke arah masjid',
    'arti_prc' => 'il part en direction de la mosquèe',
]);

$contoh_indo = \App\Models\Contoh_indo::create([
    'dtl_indo_prc_id' => 1,
    'contoh_indo' => 'dari semua arah',
    'arti_prc' => 'dari semua arah',
]);

$contoh_indo = \App\Models\Contoh_indo::create([
    'dtl_indo_prc_id' => 2,
    'contoh_indo' => 'Ia bisa menerkah arah kemana percakapan itu',
    'arti_prc' => 'il peut deviner vers ou va la conversation',
]);

$contoh_indo = \App\Models\Contoh_indo::create([
    'dtl_indo_prc_id' => 2,
    'contoh_indo' => 'Ia bisa menerkah arah kemana percakapan itu',
    'arti_prc' => 'il peut deviner vers ou va la conversation',
]);

//katalain indo
$katalain_indo = \App\Models\Katalain_indo::create([
    'kamus_id' => '1',
    'kl_indo' => 'BERARAH',
]);

$katalain_indo = \App\Models\Katalain_indo::create([
    'kamus_id' => '1',
    'kl_indo' => 'Mengarah',
]);


//contoh katalain 
$katalain_indo = \App\Models\Contoh_katalain_indo::create([
    'katalain_indo_id' => '1',
    'kl_contoh_indo' => 'null',
    'kl_arti_prc'  => 'null',
    'des_kl_contoh_indo' => 'avoir une direction',
]);

$katalain_indo = \App\Models\Contoh_katalain_indo::create([
    'katalain_indo_id' => '1',
    'kl_contoh_indo' => 'jalanku tak berarah',
    'kl_arti_prc'  => 'jalanku tak berarah',
    'des_kl_contoh_indo' => 'avoir une direction',
]);

$katalain_indo = \App\Models\Contoh_katalain_indo::create([
    'katalain_indo_id' => '2',
    'kl_contoh_indo' => 'prendre la direction de',
    'kl_arti_prc'  => 'le beteau de guerre se dirige vers i\'est',
    'des_kl_contoh_indo' => 'prendre la direction de',
]);

$katalain_indo = \App\Models\Contoh_katalain_indo::create([
    'katalain_indo_id' => '2',
    'kl_contoh_indo' => 'viser,pointer,tendre',
    'kl_arti_prc'  => 'il tend la main devant lui',
    'des_kl_contoh_indo' => 'viser,pointer,tendre',
]);


echo '<pre>';print_r('asd');die;

df3292b3888302907ae9980124b2a395
df3292b3888302907ae9980124b2a395



public function auth() {
		//tambahn ahbib

		//tutup
		$id = strip_tags(str_replace("'", "", $this->input->post('id')));
		$password = strip_tags(str_replace("'", "", $this->input->post('password')));

		$param = [ 'id' => $id, 'password' => md5($password) ];
		$param = $this->security->xss_clean($param);
		$auth = $this->login->auth($param);

        PuL76A
        echo '<pre>';print_r('asda');die;
		

		if ($auth != NULL) {
			$userdata = array(
		        'id' => $auth['id'],
		        'username' => $auth['username'],
		        'name' => $auth['name'],
		        'logged' => true
			);

			$this->session->set_userdata($userdata);

			 redirect('Content/background');
            echo '<pre>';print_r('oke');die;
		} else {
			$this->session->set_flashdata('msg', '
				<div class="alert alert-danger" role="alert">
				  Email or password wrong!
				</div>'
			);

			redirect(base_url());
		}
	}


?>