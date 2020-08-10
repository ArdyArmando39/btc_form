<?php
class Form extends CI_Controller
{

	function __construct()
	{
		date_default_timezone_set('Asia/Jakarta');
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('cookie');
	}

	function index()
	{
		$data['data'] = $this->Mdata->getDataForm1();
		$this->load->view('menu', $data);
	}

	public function history()
	{
		$this->deleteAllCookies();
		$data['data'] = $this->Mdata->getDataForm1();
		$this->load->view('history', $data);
	}

	public function gauging()
	{
		$this->load->view('gauging');
	}

	public function page1()
	{
		$this->form_validation->set_rules('evaluation_id', 'Evaluation ID', 'required');
		$this->form_validation->set_rules('nik_name', 'Name/NIK', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal', 'required');
		$this->form_validation->set_rules('connections', 'Connections', 'required');
		$this->form_validation->set_rules('od_size', 'OD Size', 'required');
		$this->form_validation->set_rules('masses', 'Masses', 'required');
		$this->form_validation->set_rules('grade', 'Grade', 'required');
		$this->form_validation->set_rules('pipe', 'Pipe/CT Number', 'required');
		$this->form_validation->set_rules('wo_number', 'WO Number', 'required');
		//ambil data dari input 
		$eval = $this->input->post('evaluation_id');
		$nik = $this->input->post('nik_name');
		$tgl = $this->input->post('tgl');
		$connections = $this->input->post('connections');
		$od = $this->input->post('od_size');
		$masses = $this->input->post('masses');
		$grade = $this->input->post('grade');
		$pipe = $this->input->post('pipe');
		$wo = $this->input->post('wo_number');

		//set cookies
		set_cookie('eval', $eval, 36000);
		set_cookie('nik', $nik, 36000);
		set_cookie('tgl', $tgl, 36000);
		set_cookie('connections', $connections, 36000);
		set_cookie('od', $od, 36000);
		set_cookie('masses', $masses, 36000);
		set_cookie('grade', $grade, 36000);
		set_cookie('pipe', $pipe, 36000);
		set_cookie('wo_number', $wo, 36000);

		if ($this->form_validation->run() != false) {
			//insert into database
			$this->Mdata->saveDataForm1('EF.QR.12', $eval, $nik, $tgl, $connections, $od, $masses, $grade, $pipe, $wo);
			$this->load->view('v_form2');
		} else {
			(get_cookie('eval') !== null) ? $this->Mdata->deleteDataForm1(get_cookie('eval')) : '';
			$this->load->view('v_form1');
		}
	}

	public function page2()
	{
		$this->form_validation->set_rules('optradio', ' RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number1', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('gage_number2', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('overlay_number', 'OVERLAY NUMBER', 'required');

		//ambil data dari input
		$gage_number1 = $this->input->post('gage_number1');
		$gage_number2 = $this->input->post('gage_number2');
		$overlay_number = $this->input->post('overlay_number');

		//radio
		$visual = $this->input->post('visual');
		$optradio = $this->input->post('optradio');
		$thread_profile = $this->input->post('thread_profile');
		$comb = $this->input->post('comb');

		//set cookies
		set_cookie('optradio', $optradio, 36000);
		set_cookie('gage1', $gage_number1, 36000);
		set_cookie('gage2', $gage_number2, 36000);
		set_cookie('overlay', $overlay_number, 36000);
		set_cookie('visual', $visual, 3600);
		set_cookie('thread_profile', $thread_profile, 36000);
		set_cookie('comb', $comb, 36000);

		//insert into databasehist

		if ($this->form_validation->run() != false) {
			//echo "Form validation oke";

			$this->Mdata->saveDataForm2(get_cookie('eval'), $visual, $gage_number1, $comb, $gage_number2, $thread_profile, $overlay_number, $optradio);
			$this->load->view('v_form3');
		} else {
			$this->Mdata->deleteDataForm2(get_cookie('eval'));
			$this->load->view('v_form2');
		}
	}
	public function page3()
	{

		$this->form_validation->set_rules('gage_number3', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('results1', 'RESULTS', 'required');
		$this->form_validation->set_rules('gage_number4', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('min_tolerance1', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('results2', 'RESULTS', 'required');

		//ambil data dari input
		$gage_number3 = $this->input->post('gage_number3');
		$results1 = $this->input->post('results1');
		$gage_number4 = $this->input->post('gage_number4');
		$min_tolerance1 = $this->input->post('min_tolerance1');
		$min_tolerance2 = $this->input->post('min_tolerance2');
		//$results2 = $this->input->post('results2');

		//radio
		$coupling_nl = $this->input->post('coupling_nl');
		$results3 = $this->input->post('results3');
		$results4 = $this->input->post('results4');
		$diameter_q = $this->input->post('diameter_q');
		$results2 = $this->input->post('results2');

		//set cookies
		set_cookie('gage_number3', $gage_number3, 36000);
		set_cookie('results1', $results1, 36000);
		set_cookie('gage_number4', $gage_number4, 36000);
		set_cookie('min_tolerance1', $min_tolerance1, 36000);
		set_cookie('min_tolerance2', $min_tolerance2, 36000);
		set_cookie('results2', $results2, 36000);
		set_cookie('results3', $results3, 36000);
		set_cookie('results4', $results4, 36000);
		set_cookie('couplin_nl', $coupling_nl, 36000);
		set_cookie('diameter_q', $diameter_q, 36000);


		if ($this->form_validation->run() != false) {
			//echo "Form validation oke";
			$this->Mdata->saveDataForm3(get_cookie('eval'), $coupling_nl, $gage_number3, $min_tolerance1, $results1, $results2, $diameter_q, $gage_number4, $min_tolerance2, $results3, $results4);
			$this->load->view('v_form4');
		} else {
			$this->Mdata->deleteDataForm3(get_cookie('eval'));
			$this->load->view('v_form3');
		}
	}

	public function page4()
	{
		$this->form_validation->set_rules('results6', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number5', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('min_tolerance3', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('results5', 'RESULTS', 'required');
		$this->form_validation->set_rules('results7', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('results8', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number6', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('min_tolerance4', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('max_tolerance1', 'MAX TOLERANCE', 'required');
		$this->form_validation->set_rules('results7', 'RESULTS', 'required');
		//	$this->form_validation->set_rules('optradio', 'RADIO BUTTON', 'required');

		//ambil data dari input
		$gage_number5 = $this->input->post('gage_number5');
		$results5 = $this->input->post('results5');
		$results7 = $this->input->post('results7');
		$gage_number6 = $this->input->post('gage_number6');
		$min_tolerance3 = $this->input->post('min_tolerance3');
		$min_tolerance4 = $this->input->post('min_tolerance4');
		$max_tolerance1 = $this->input->post('max_tolerance1');

		//radio
		$face_b = $this->input->post('face_b');
		$results6 = $this->input->post('results6');
		$results8 = $this->input->post('results8');
		$diameter_w = $this->input->post('diameter_w');


		//set cookies
		set_cookie('gage_number5', $gage_number5, 36000);
		set_cookie('results5', $results5, 36000);
		set_cookie('gage_number6', $gage_number6, 36000);
		set_cookie('min_tolerance3', $min_tolerance3, 36000);
		set_cookie('min_tolerance4', $min_tolerance4, 36000);
		set_cookie('max_tolerance1', $max_tolerance1, 36000);
		set_cookie('results6', $results6, 36000);
		set_cookie('results7', $results7, 36000);
		set_cookie('results8', $results8, 36000);
		set_cookie('face_b', $face_b, 36000);
		set_cookie('diameter_w', $diameter_w, 36000);


		if ($this->form_validation->run() != false) {
			$this->Mdata->saveDataForm4(get_cookie('eval'), $face_b, $gage_number5, $min_tolerance3, $results5, $results6, $diameter_w, $gage_number6, $min_tolerance4, $max_tolerance1, $results7, $results8);
			//echo "Form validation oke";
			$this->load->view('v_form5');
		} else {
			$this->Mdata->deleteDataForm4(get_cookie('eval'));
			$this->load->view('v_form4');
		}
	}

	public function page5()
	{
		$this->form_validation->set_rules('results9', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number7', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('min_tolerance5', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('max_tolerance2', 'MAX TOLERANCE', 'required');
		$this->form_validation->set_rules('results10', 'RESULTS1', 'required');
		$this->form_validation->set_rules('results11', 'RESULTS2', 'required');
		$this->form_validation->set_rules('results12', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('results13', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number8', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('min_tolerance6', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('max_tolerance3', 'MAX TOLERANCE', 'required');
		$this->form_validation->set_rules('results14', 'RESULTS1', 'required');

		//ambil data dari input
		$gage_number7 = $this->input->post('gage_number7');
		$results9 = $this->input->post('results9');
		$results10 = $this->input->post('results10');
		$gage_number8 = $this->input->post('gage_number8');
		$min_tolerance5 = $this->input->post('min_tolerance5');
		$max_tolerance2 = $this->input->post('max_tolerance2');
		$min_tolerance6 = $this->input->post('min_tolerance6');
		$max_tolerance3 = $this->input->post('max_tolerance3');
		$results12 = $this->input->post('results12');
		$results13 = $this->input->post('results13');


		//radio
		$theread_form = $this->input->post('theread_form');
		$theread_depth = $this->input->post('theread_depth');
		$results11 = $this->input->post('results11');
		$results14 = $this->input->post('results14');

		//set cookies
		set_cookie('gage_number7', $gage_number7, 36000);
		set_cookie('results9', $results9, 36000);
		set_cookie('gage_number8', $gage_number8, 36000);
		set_cookie('min_tolerance5', $min_tolerance5, 36000);
		set_cookie('min_tolerance6', $min_tolerance6, 36000);
		set_cookie('max_tolerance2', $max_tolerance2, 36000);
		set_cookie('max_tolerance3', $max_tolerance3, 36000);
		set_cookie('results10', $results10, 36000);
		set_cookie('results11', $results11, 36000);
		set_cookie('results12', $results12, 36000);
		set_cookie('results13', $results13, 36000);
		set_cookie('results14', $results14, 36000);
		set_cookie('theread_depth', $theread_depth, 36000);
		set_cookie('theread_form', $theread_form, 36000);



		if ($this->form_validation->run() != false) {
			//echo "Form validation oke";
			$this->Mdata->saveDataForm5(get_cookie('eval'), $theread_depth,  $gage_number7, $min_tolerance5, $max_tolerance2, $results9, $results10, $results11, $theread_depth, $gage_number8, $min_tolerance6, $max_tolerance3, $results12, $results13, $results14, $theread_form);
			$this->load->view('v_form6');
		} else {
			$this->Mdata->deleteDataForm5(get_cookie('eval'));
			$this->load->view('v_form5');
		}
	}

	public function page6()
	{
		$this->form_validation->set_rules('crossover', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number9', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('min_tolerance7', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('max_tolerance4', 'MAX TOLERANCE', 'required');
		$this->form_validation->set_rules('results15', 'RESULTS1', 'required');
		$this->form_validation->set_rules('results16', 'RESULTS2', 'required');
		$this->form_validation->set_rules('results17', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('results18', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number10', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('min_tolerance8', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('max_tolerance5', 'MAX TOLERANCE', 'required');
		$this->form_validation->set_rules('results19', 'RESULTS', 'required');
		//$this->form_validation->set_rules('theread_perfect', 'RADIO BUTTON', 'required');

		//ambil data dari input
		$gage_number9 = $this->input->post('gage_number9');
		$results15 = $this->input->post('results15');
		$results16 = $this->input->post('results16');
		$gage_number10 = $this->input->post('gage_number10');
		$min_tolerance7 = $this->input->post('min_tolerance7');
		$max_tolerance4 = $this->input->post('max_tolerance4');
		$min_tolerance8 = $this->input->post('min_tolerance8');
		$max_tolerance5 = $this->input->post('max_tolerance5');
		$results18 = $this->input->post('results18');



		//radio
		$theread_perfect = $this->input->post('theread_perfect');
		$crossover = $this->input->post('crossover');
		$results17 = $this->input->post('results17');
		$results19 = $this->input->post('results19');

		//set cookies
		set_cookie('gage_number9', $gage_number9, 36000);
		set_cookie('results15', $results15, 36000);
		set_cookie('gage_number10', $gage_number10, 36000);
		set_cookie('min_tolerance7', $min_tolerance7, 36000);
		set_cookie('min_tolerance8', $min_tolerance8, 36000);
		set_cookie('max_tolerance4', $max_tolerance4, 36000);
		set_cookie('max_tolerance5', $max_tolerance5, 36000);
		set_cookie('results16', $results16, 36000);
		set_cookie('results17', $results17, 36000);
		set_cookie('results18', $results18, 36000);
		set_cookie('results19', $results19, 36000);

		set_cookie('theread_perfect', $theread_perfect, 36000);
		set_cookie('crossover', $crossover, 36000);

		$this->Mdata->saveDataForm6(get_cookie('eval'), $theread_perfect, $gage_number9, $min_tolerance7, $max_tolerance4, $results15, $results16, $results17, $crossover, $gage_number10, $min_tolerance8, $max_tolerance5, $results18, $results19);

		if ($this->form_validation->run() != false) {
			//echo "Form validation oke";
			$this->load->view('v_form7');
		} else {
			$this->Mdata->deleteDataForm6(get_cookie('eval'));
			$this->load->view('v_form6');
		}
	}

	public function page7()
	{
		$this->form_validation->set_rules('theread_cummulative', 'THEREAD CUMMULATIVE', 'required');
		$this->form_validation->set_rules('gage_number11', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('min_tolerance9', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('max_tolerance6', 'MAX TOLERANCE', 'required');
		$this->form_validation->set_rules('results20', 'RESULTS1', 'required');
		$this->form_validation->set_rules('results21', 'RESULTS2', 'required');
		$this->form_validation->set_rules('results22', 'STATUS ', 'required');
		$this->form_validation->set_rules('results23', 'RESULTS', 'required');
		$this->form_validation->set_rules('gage_number12', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('min_tolerance10', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('max_tolerance7', 'MAX TOLERANCE', 'required');
		$this->form_validation->set_rules('results24', 'RESULTS', 'required');
		$this->form_validation->set_rules('theread_lead', 'THEREAD LEAD', 'required');

		//ambil data dari input
		$gage_number11 = $this->input->post('gage_number11');
		$results20 = $this->input->post('results20');
		$results21 = $this->input->post('results21');
		$gage_number12 = $this->input->post('gage_number12');
		$min_tolerance9 = $this->input->post('min_tolerance9');
		$max_tolerance6 = $this->input->post('max_tolerance6');
		$min_tolerance10 = $this->input->post('min_tolerance10');
		$max_tolerance7 = $this->input->post('max_tolerance7');
		$results22 = $this->input->post('results22');

		//radio
		$theread_lead = $this->input->post('theread_lead');
		$theread_cummulative = $this->input->post('theread_cummulative');
		$results23 = $this->input->post('results23');
		$results24 = $this->input->post('results24');

		//set cookies
		set_cookie('gage_number11', $gage_number11, 36000);
		set_cookie('results20', $results20, 36000);
		set_cookie('gage_number12', $gage_number12, 36000);
		set_cookie('min_tolerance9', $min_tolerance9, 36000);
		set_cookie('min_tolerance10', $min_tolerance10, 36000);
		set_cookie('max_tolerance6', $max_tolerance6, 36000);
		set_cookie('max_tolerance7', $max_tolerance7, 36000);
		set_cookie('results21', $results21, 36000);
		set_cookie('results22', $results22, 36000);
		set_cookie('results23', $results23, 36000);
		set_cookie('results24', $results24, 36000);

		set_cookie('theread_lead', $theread_lead, 36000);
		set_cookie('theread_cummulative', $theread_cummulative, 36000);



		if ($this->form_validation->run() != false) {
			//echo "Form validation oke";
			$this->Mdata->saveDataForm7(get_cookie('eval'), $theread_lead, $gage_number11, $min_tolerance9, $max_tolerance6, $results20, $results21, $results22, $theread_cummulative, $gage_number12, $min_tolerance10, $max_tolerance7, $results23, $results24);
			$this->load->view('v_form8');
		} else {
			$this->Mdata->deleteDataForm7(get_cookie('eval'));
			$this->load->view('v_form7');
		}
	}


	public function page8()
	{
		$this->form_validation->set_rules('results27', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number13', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('min_tolerance11', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('max_tolerance9', 'MAX TOLERANCE', 'required');
		$this->form_validation->set_rules('min_results', 'MIN RESULTS', 'required');
		$this->form_validation->set_rules('max_results', 'MIN RESULTS', 'required');
		$this->form_validation->set_rules('average1', 'AVERAGE', 'required');
		$this->form_validation->set_rules('theread_diameter', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('theread_ovality', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number14', 'GAGE NUMBER', 'required');
		$this->form_validation->set_rules('max_tolerance8', 'MAX TOLERANCE', 'required');
		$this->form_validation->set_rules('results26', 'RESULTS', 'required');
		$this->form_validation->set_rules('results25', 'RADIO BUTTON', 'required');

		//ambil data dari input
		$gage_number13 = $this->input->post('gage_number13');
		$results26 = $this->input->post('results26');
		$min_results = $this->input->post('min_results');
		$max_results = $this->input->post('max_results');
		$gage_number14 = $this->input->post('gage_number14');
		$average1 = $this->input->post('average1');
		$max_tolerance9 = $this->input->post('max_tolerance9');
		$min_tolerance11 = $this->input->post('min_tolerance11');
		$max_tolerance8 = $this->input->post('max_tolerance8');



		//radio
		$theread_diameter = $this->input->post('theread_diameter');
		$theread_ovality = $this->input->post('theread_ovality');
		$results25 = $this->input->post('results25');
		$results27 = $this->input->post('results27');

		//set cookies
		set_cookie('gage_number13', $gage_number13, 36000);
		set_cookie('results26', $results26, 36000);
		set_cookie('gage_number14', $gage_number14, 36000);
		set_cookie('min_tolerance11', $min_tolerance11, 36000);

		set_cookie('max_tolerance9', $max_tolerance9, 36000);
		set_cookie('max_tolerance8', $max_tolerance8, 36000);
		set_cookie('average1', $average1, 36000);
		set_cookie('min_results', $min_results, 36000);
		set_cookie('max_results', $max_results, 36000);
		set_cookie('results27', $results27, 36000);
		set_cookie('results25', $results25, 36000);

		set_cookie('theread_ovality', $theread_ovality, 36000);
		set_cookie('theread_diameter', $theread_diameter, 36000);



		if ($this->form_validation->run() != false) {
			//echo "Form validation oke";
			$this->Mdata->saveDataForm8(get_cookie('eval'), $theread_diameter, $gage_number13, $min_tolerance11, $max_tolerance8, $min_results, $max_results, $average1, $results25, $theread_ovality, $gage_number14, $max_tolerance9, $results26, $results27);
			$this->load->view('v_form9');
		} else {
			$this->Mdata->deleteDataForm8(get_cookie('eval'));
			$this->load->view('v_form8');
		}
	}

	public function page9()
	{
		//$this->form_validation->set_rules('results29', ' RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number15', 'Gage Number', 'required');
		$this->form_validation->set_rules('min_tolerance12', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('max_tolerance10', 'MAX TOLERANCE', 'required');
		//$this->form_validation->set_rules('results28', 'Results', 'required');
		$this->form_validation->set_rules('remark', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('product_status', 'RADIO BUTTON', 'required');
		$this->form_validation->set_rules('stand_of', 'RADIO BUTTON', 'required');
		//sealA
		$this->form_validation->set_rules('results30', ' RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number16', 'Gage Number', 'required');
		$this->form_validation->set_rules('min_tolerance13', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('max_tolerance11', 'MAX TOLERANCE', 'required');
		$this->form_validation->set_rules('results31', 'Results', 'required');
		$this->form_validation->set_rules('seal_a', 'RADIO BUTTON', 'required');
		//sealB
		$this->form_validation->set_rules('results32', ' RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number17', 'Gage Number', 'required');
		$this->form_validation->set_rules('min_tolerance14', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('max_tolerance12', 'MAX TOLERANCE', 'required');
		$this->form_validation->set_rules('results33', 'Results', 'required');
		$this->form_validation->set_rules('seal_b', 'RADIO BUTTON', 'required');
		//sealC
		//$this->form_validation->set_rules('results34', ' RADIO BUTTON', 'required');
		$this->form_validation->set_rules('gage_number18', 'Gage Number', 'required');
		$this->form_validation->set_rules('min_tolerance15', 'MIN TOLERANCE', 'required');
		$this->form_validation->set_rules('max_tolerance13', 'MAX TOLERANCE', 'required');
		//$this->form_validation->set_rules('results35', 'Results', 'required');
		$this->form_validation->set_rules('seal_c', 'RADIO BUTTON', 'required');

		//ambil data dari input
		$gage_number15 = $this->input->post('gage_number15');
		$min_tolerance12 = $this->input->post('min_tolerance12');
		$max_tolerance10 = $this->input->post('max_tolerance10');
		$results28 = $this->input->post('results28');
		//SealA
		$gage_number16 = $this->input->post('gage_number16');
		$min_tolerance13 = $this->input->post('min_tolerance13');
		$max_tolerance11 = $this->input->post('max_tolerance11');
		$results31 = $this->input->post('results31');
		//SealB
		$gage_number17 = $this->input->post('gage_number17');
		$min_tolerance14 = $this->input->post('min_tolerance14');
		$max_tolerance12 = $this->input->post('max_tolerance12');
		$results33 = $this->input->post('results33');
		//SealC
		$gage_number18 = $this->input->post('gage_number18');
		$min_tolerance15 = $this->input->post('min_tolerance15');
		$max_tolerance13 = $this->input->post('max_tolerance13');
		$results35 = $this->input->post('results35');

		//radio
		$stand_of = $this->input->post('stand_of');
		$remark = $this->input->post('remark');
		$results29 = $this->input->post('results29');
		$product_status = $this->input->post('product_status');
		//SealA
		$seal_a = $this->input->post('seal_a');
		$results30 = $this->input->post('results30');
		//SealB
		$seal_b = $this->input->post('seal_b');
		$results32 = $this->input->post('results32');
		//SealC
		$seal_c = $this->input->post('seal_c');
		$results34 = $this->input->post('results34');

		//set cookies
		set_cookie('gage_number15', $gage_number15, 36000);
		set_cookie('min_tolerance12', $min_tolerance12, 36000);
		set_cookie('max_tolerance10', $max_tolerance10, 36000);
		set_cookie('results28', $results28, 36000);
		set_cookie('stand_of', $stand_of, 36000);
		set_cookie('remark', $remark, 36000);
		set_cookie('results29', $results29, 36000);
		set_cookie('product_status', $product_status, 36000);
		//set cookies seal A
		set_cookie('gage_number16', $gage_number16, 36000);
		set_cookie('min_tolerance13', $min_tolerance13, 36000);
		set_cookie('max_tolerance11', $max_tolerance11, 36000);
		set_cookie('results30', $results30, 36000);
		set_cookie('seal_a', $seal_a, 36000);
		set_cookie('results31', $results31, 36000);
		//set cookies seal B
		set_cookie('gage_number17', $gage_number17, 36000);
		set_cookie('min_tolerance14', $min_tolerance14, 36000);
		set_cookie('max_tolerance12', $max_tolerance12, 36000);
		set_cookie('results32', $results32, 36000);
		set_cookie('seal_b', $seal_b, 36000);
		set_cookie('results33', $results33, 36000);
		//set cookies seal C
		set_cookie('gage_number18', $gage_number18, 36000);
		set_cookie('min_tolerance15', $min_tolerance15, 36000);
		set_cookie('max_tolerance13', $max_tolerance13, 36000);
		set_cookie('results34', $results30, 36000);
		set_cookie('seal_c', $seal_c, 36000);
		set_cookie('results35', $results35, 36000);


		if ($this->form_validation->run() != false) {
			//echo "Form validation oke";
			$this->Mdata->saveDataForm9(get_cookie('eval'), $stand_of, $gage_number15, $min_tolerance12, $max_tolerance10, $results28, $results29, $product_status, $remark , $seal_a, $gage_number16, $min_tolerance13, $max_tolerance11, $results30, $results31, $seal_b, $gage_number17, $min_tolerance14, $max_tolerance12, $results32, $results33, $seal_c, $gage_number18, $min_tolerance15, $max_tolerance13, $results34, $results35);
			$hasil['data'] = $this->Mdata->getDataForm1();
			$this->load->view('success', $hasil);
		} else {
			$this->Mdata->deleteDataForm9(get_cookie('eval'));
			$this->load->view('v_form9');
		}
	}



	public function deleteAllCookies()
	{
		//page 1
		delete_cookie('eval');
		delete_cookie('nik');
		delete_cookie('tgl');
		delete_cookie('connections');
		delete_cookie('od');
		delete_cookie('masses');
		delete_cookie('grade');
		delete_cookie('pipe');
		delete_cookie('wo_number');

		//page2
		delete_cookie('optradio');
		delete_cookie('overlay');
		delete_cookie('gage2');
		delete_cookie('gage1');
		delete_cookie('visual');
		delete_cookie('thread_profile');
		delete_cookie('comb');

		//page3
		delete_cookie('gage_number3');
		delete_cookie('results1');
		delete_cookie('gage_number4');
		delete_cookie('min_tolerance1');
		delete_cookie('min_tolerance2');
		delete_cookie('results2');
		delete_cookie('results3');
		delete_cookie('results4');
		delete_cookie('Theread_L4');
		delete_cookie('Theread_LC');

		//page4
		delete_cookie('gage_number5');
		delete_cookie('results5');
		delete_cookie('gage_number6');
		delete_cookie('min_tolerance3');
		delete_cookie('min_tolerance4');
		delete_cookie('max_tolerance1');
		delete_cookie('results6');
		delete_cookie('results7');
		delete_cookie('results8');
		delete_cookie('length_A1');
		delete_cookie('run_out');

		//page 5
		delete_cookie('gage_number7');
		delete_cookie('results9');
		delete_cookie('gage_number8');
		delete_cookie('min_tolerance5');
		delete_cookie('min_tolerance6');
		delete_cookie('max_tolerance2');
		delete_cookie('max_tolerance3');
		delete_cookie('results10');
		delete_cookie('results11');
		delete_cookie('results12');
		delete_cookie('results13');
		delete_cookie('results14');
		delete_cookie('theread_depth');
		delete_cookie('theread_form');

		//page 6
		delete_cookie('gage_number9');
		delete_cookie('results15');
		delete_cookie('gage_number10');
		delete_cookie('min_tolerance7');
		delete_cookie('min_tolerance8');
		delete_cookie('max_tolerance4');
		delete_cookie('max_tolerance5');
		delete_cookie('results16');
		delete_cookie('results17');
		delete_cookie('results18');
		delete_cookie('results19');

		delete_cookie('theread_perfect');
		delete_cookie('crossover');

		//page 7
		delete_cookie('gage_number11');
		delete_cookie('results20');
		delete_cookie('gage_number12');
		delete_cookie('min_tolerance9');
		delete_cookie('min_tolerance10');
		delete_cookie('max_tolerance6');
		delete_cookie('max_tolerance7');
		delete_cookie('results21');
		delete_cookie('results22');
		delete_cookie('results23');
		delete_cookie('results24');

		delete_cookie('theread_lead');
		delete_cookie('theread_cummulative');

		//page 8
		delete_cookie('gage_number13');
		delete_cookie('results26');
		delete_cookie('gage_number14');
		delete_cookie('min_tolerance11');

		delete_cookie('max_tolerance9');
		delete_cookie('max_tolerance8');
		delete_cookie('average1');
		delete_cookie('min_results');
		delete_cookie('max_results');
		delete_cookie('results27');
		delete_cookie('results25');

		delete_cookie('theread_ovality');
		delete_cookie('theread_diameter');

		//page 9
		delete_cookie('gage_number15');
		delete_cookie('min_tolerance12');
		delete_cookie('max_tolerance10');
		delete_cookie('results28');
		delete_cookie('stand_of');
		delete_cookie('results29');
		delete_cookie('product_status');
		delete_cookie('remark');
		//seal_a
		delete_cookie('gage_number16');
		delete_cookie('min_tolerance13');
		delete_cookie('max_tolerance11');
		delete_cookie('results30');
		delete_cookie('seal_a');
		delete_cookie('results31');
		//seal_b
		delete_cookie('gage_number17');
		delete_cookie('min_tolerance14');
		delete_cookie('max_tolerance12');
		delete_cookie('results32');
		delete_cookie('seal_b');
		delete_cookie('results33');
		//seal_c
		delete_cookie('gage_number18');
		delete_cookie('min_tolerance15');
		delete_cookie('max_tolerance13');
		delete_cookie('results34');
		delete_cookie('seal_c');
		delete_cookie('results35');
	}



	public function backToPage1()
	{
		$this->deleteAllCookies();
		$this->load->view('v_form1');
	}

	public function print($id)
	{
		$mpdf = new \Mpdf\Mpdf();

		//fetch Variable
		$evaluation = get_cookie('eval');
		$nik = get_cookie('nik');
		$tgl = get_cookie('tgl');
		$connections = get_cookie('connections');
		$od = get_cookie('od');
		$masses = get_cookie('masses');
		$grade = get_cookie('grade');
		$pipe = get_cookie('pipe');
		$wo_number = get_cookie('wo_number');

		$db_page1 = $this->db->query("SELECT * FROM evalys.PAGE1 WHERE evaluation = '$id'");
		$data_page1 = $db_page1->row();

		$db_page2 = $this->db->query("SELECT * FROM evalys.PAGE2 WHERE evaluation = '$id'");
		$data_page2 = $db_page2->row();

		$db_page3 = $this->db->query("SELECT * FROM evalys.PAGE3 WHERE evaluation = '$id'");
		$data_page3 = $db_page3->row();

		$db_page4 = $this->db->query("SELECT * FROM evalys.PAGE4 WHERE evaluation = '$id'");
		$data_page4 = $db_page4->row();

		$db_page5 = $this->db->query("SELECT * FROM evalys.PAGE5 WHERE evaluation = '$id'");
		$data_page5 = $db_page5->row();

		$db_page6 = $this->db->query("SELECT * FROM evalys.PAGE6 WHERE evaluation = '$id'");
		$data_page6 = $db_page6->row();

		$db_page7 = $this->db->query("SELECT * FROM evalys.PAGE7 WHERE evaluation = '$id'");
		$data_page7 = $db_page7->row();

		$db_page8 = $this->db->query("SELECT * FROM evalys.PAGE8 WHERE evaluation = '$id'");
		$data_page8 = $db_page8->row();

		$db_page9 = $this->db->query("SELECT * FROM evalys.PAGE9 WHERE evaluation = '$id'");
		$data_page9 = $db_page9->row();

		$page1 = '

			<table width=100%>
			<tr>
				<td colspan=2 style="background-color:green;  color: white">
					Product Information
				</td>
			</tr>
			<tr>
				<td width=50%>
				<table width=100%>
				<tr>
					<td width="40%"> Report Number </td>
					<td> : EF.QR.12</td>
				</tr>
				<tr>
					<td> Evaluation </td>
					<td> : ' . $data_page1->evaluation . '</td>
				</tr>
				<tr>
					<td> NIK </td>
					<td>: ' . $data_page1->name_nik . '</td>
				</tr>
				<tr>
					<td> Tanggal </td>
					<td>: ' . $data_page1->date . '</td>
				</tr>
				<tr>
					<td> Connection </td>
					<td>: ' . $data_page1->connection . '</td>
				</tr>
				</table>
			</td>
			<td valign="top">
				<table width=100% >
				<tr>
					<td width="45%"> OD Size </td>
					<td> : ' . $data_page1->od_size . '</td>
				</tr>
				<tr>
					<td> Masses </td>
					<td> : ' . $data_page1->masses . '</td>
				</tr>
				<tr>
					<td> Grade </td>
					<td> : ' . $data_page1->grade . '</td>
				</tr>
				<tr>
					<td> Pipe </td>
					<td> : ' . $data_page1->pipe . '</td>
				</tr>
				<tr>
					<td> WO number </td>
					<td> : ' . $data_page1->wo_number . '</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<table width=100% >
					<tr>
						<td colspan=2 style="background-color:green;  color: white">
							Visual
						</td>
					<tr>
					<tr>
						<td width=40%>
							Status
						</td>
						<td>: ' . $data_page2->status_visual . '</td>
					</tr>
				</table>

				
				<table width=100% >
					<tr>
						<td colspan=2 style="background-color:green;  color: white">
							THREAD PROFILE (COMB)
						</td>
					<tr>
					<tr>
						<td width=40%>
							Gage Number
						</td>
						<td>: ' . $data_page2->comb_no . '</td>
					</tr>
					<tr>
						<td width=40%>
							Status
						</td>
						<td>: ' . $data_page2->comb_status . '</td>
					</tr>
				</table>

				<table width=100% >
					<tr>
						<td colspan=2 style="background-color:green;  color: white">
							THREAD PROFILE (GO NO GO)
						</td>
					<tr>
					<tr>
						<td width=40%>
							Gage Number
						</td>
						<td>: ' . $data_page2->gonogo_no . '</td>
					</tr>
					<tr>
						<td width=40%>
							Status
						</td>
						<td>: ' . $data_page2->gonogo_status . '</td>
					</tr>
				</table>

				<table width=100% >
					<tr>
						<td colspan=2 style="background-color:green;  color: white">
							CAST
						</td>
					<tr>
					<tr>
						<td width=40%>
							Gage Number
						</td>
						<td>: ' . $data_page2->cast_no . '</td>
					</tr>
					<tr>
						<td width=40%>
							Status
						</td>
						<td>: ' . $data_page2->cast_status . '</td>
					</tr>
				</table>

				<table width=100% >
					<tr>
						<td colspan=2 style="background-color:green;  color: white">
							COUPLING LENGTH (NL)
						</td>
					<tr>
					<tr>
						<td width=40%>
							Unit
						</td>
						<td>: ' . $data_page3->l4_unit . '</td>
					</tr>
					<tr>
						<td width=40%>
							Gage Number
						</td>
						<td>: ' . $data_page3->l4_no . '</td>
					</tr>
					<tr>
						<td width=40%>
							Min. Tolerance
						</td>
						<td>: ' . $data_page3->l4_min . '</td>
					</tr>
					<tr>
						<td width=40%>
							Results
						</td>
						<td>: ' . $data_page3->l4_results . '</td>
					</tr>
					<tr>
						<td width=40%>
							Status
						</td>
						<td>: ' . $data_page3->l4_status . '</td>
					</tr>
				</table>

				<table width=100% >
					<tr>
						<td colspan=2 style="background-color:green; color: white">
							DIAMETER RECESS (Q)
						</td>
					<tr>
					<tr>
						<td width=40%>
							Unit
						</td>
						<td>: ' . $data_page3->lc_unit . '</td>
					</tr>
					<tr>
						<td width=40%>
							Gage Number
						</td>
						<td>: ' . $data_page3->lc_no . '</td>
					</tr>
					<tr>
						<td width=40%>
							Min. Tolerance
						</td>
						<td>: ' . $data_page3->lc_min . '</td>
					</tr>
					<tr>
						<td width=40%>
							Results
						</td>
						<td>: ' . $data_page3->lc_results . '</td>
					</tr>
					<tr>
						<td width=40%>
							Status
						</td>
						<td>: ' . $data_page3->lc_status . '</td>
					</tr>
				</table>

				
			<td valign="top">
			<table width=100% >
			<tr>
				<td colspan=2 style="background-color:green; color: white;">
					BEARING FACE (B)
				</td>
			<tr>
			<tr>
				<td width=40%>
					Unit
				</td>
				<td>: ' . $data_page4->a1_unit . '</td>
			</tr>
			<tr>
				<td width=40%>
					Gage Number
				</td>
				<td>: ' . $data_page4->a1_no . '</td>
			</tr>
			<tr>
				<td width=40%>
					Min. Tolerance
				</td>
				<td>: ' . $data_page4->a1_min . '</td>
			</tr>
			<tr>
				<td width=40%>
					Results
				</td>
				<td>: ' . $data_page4->a1_results . '</td>
			</tr>
			<tr>
				<td width=40%>
					Status
				</td>
				<td>: ' . $data_page4->a1_status . '</td>
			</tr>
		</table>


		<table width=100% >
		<tr>
			<td colspan=2 style="background-color:green;  color: white">
				OUTSIDE DIAMETER (W)
			</td>
		<tr>
		<tr>
			<td width=40%>
				Unit
			</td>
			<td>: ' . $data_page4->runout_unit . '</td>
		</tr>
		<tr>
			<td width=40%>
				Gage Number
			</td>
			<td>: ' . $data_page4->runout_no . '</td>
		</tr>
		<tr>
			<td width=40%>
				Min. Tolerance
			</td>
			<td>: ' . $data_page4->runout_min . '</td>
		</tr>
		<tr>
			<td width=40%>
				Max. Tolerance
			</td>
			<td>: ' . $data_page4->runout_max . '</td>
		</tr>
		<tr>
			<td width=40%>
				Results
			</td>
			<td>: ' . $data_page4->runout_results . '</td>
		</tr>
		<tr>
			<td width=40%>
				Status
			</td>
			<td>: ' . $data_page4->runout_status . '</td>
		</tr>
	</table>
	
	<table width=100% >
		<tr>
			<td colspan=2 style="background-color:green;  color: white">
				THREAD DEPTH
			</td>
		<tr>
		<tr>
			<td width=40%>
				Unit
			</td>
			<td>: ' . $data_page5->tdepth_unit . '</td>
		</tr>
		<tr>
			<td width=40%>
				Gage Number
			</td>
			<td>: ' . $data_page5->tdepth_no . '</td>
		</tr>
		<tr>
			<td width=40%>
				Min. Tolerance
			</td>
			<td>: ' . $data_page5->tdepth_min . '</td>
		</tr>
		<tr>
			<td width=40%>
				Max. Tolerance
			</td>
			<td>: ' . $data_page5->tdepth_max . '</td>
		</tr>
		<tr>
			<td width=40%>
				Results 1
			</td>
			<td>: ' . $data_page5->tdepth_results1 . '</td>
		</tr>
		<tr>
		<td width=40%>
			Results 2
		</td>
		<td>: ' . $data_page5->tdepth_results2 . '</td>
	</tr>
		<tr>
			<td width=40%>
				Status
			</td>
			<td>: ' . $data_page5->tdepth_status . '</td>
		</tr>
	</table>

	<table width=100% >
	<tr>
		<td colspan=2 style="background-color:green;  color: white">
			THREAD FORM
		</td>
	<tr>
	<tr>
		<td width=40%>
			Unit
		</td>
		<td>: ' . $data_page5->tform_unit . '</td>
	</tr>
	<tr>
		<td width=40%>
			Gage Number
		</td>
		<td>: ' . $data_page5->tform_no . '</td>
	</tr>
	<tr>
		<td width=40%>
			Min. Tolerance
		</td>
		<td>: ' . $data_page5->tform_min . '</td>
	</tr>
	<tr>
		<td width=40%>
			Max. Tolerance
		</td>
		<td>: ' . $data_page5->tform_max . '</td>
	</tr>
	<tr>
		<td width=40%>
			Results 1
		</td>
		<td>: ' . $data_page5->tform_results1 . '</td>
	</tr>
	<tr>
	<td width=40%>
		Results 2
	</td>
	<td>: ' . $data_page5->tform_results2 . '</td>
</tr>
	<tr>
		<td width=40%>
			Status
		</td>
		<td>: ' . $data_page5->tform_status . '</td>
	</tr>
</table>

			</td>
		</tr>
	</table>
			';

		$page2 = '<br><br><br><br><br><br><br><br><br>
<table width=100%>
<tr>
	<td width=50% valign="top">
	<table width=100% >
	<tr>
		<td colspan=2 style="background-color:green;  color: white">
			THREAD TAPER (THREAD PERFECT)
		</td>
	<tr>
	<tr>
		<td width=40%>
			Unit
		</td>
		<td>: ' . $data_page6->perfect_unit . '</td>
	</tr>
	<tr>
		<td width=40%>
			Gage Number
		</td>
		<td>: ' . $data_page6->perfect_no . '</td>
	</tr>
	<tr>
		<td width=40%>
			Min. Tolerance
		</td>
		<td>: ' . $data_page6->perfect_min . '</td>
	</tr>
	<tr>
		<td width=40%>
			Max. Tolerance
		</td>
		<td>: ' . $data_page6->perfect_max . '</td>
	</tr>
	<tr>
		<td width=40%>
			Results 1
		</td>
		<td>: ' . $data_page6->perfect_results1 . '</td>
	</tr>
	<tr>
	<td width=40%>
		Results 2
	</td>
	<td>: ' . $data_page6->perfect_results2 . '</td>
</tr>
	<tr>
		<td width=40%>
			Status
		</td>
		<td>: ' . $data_page6->perfect_status . '</td>
	</tr>
</table>

<table width=100% >
	<tr>
		<td colspan=2 style="background-color:green;  color: white">
			THREAD ALLIGNMENT (CROSSOVER)
		</td>
	<tr>
	<tr>
		<td width=40%>
			Unit
		</td>
		<td>: ' . $data_page6->imperfect_unit . '</td>
	</tr>
	<tr>
		<td width=40%>
			Gage Number
		</td>
		<td>: ' . $data_page6->imperfect_no . '</td>
	</tr>
	<tr>
		<td width=40%>
			Min. Tolerance
		</td>
		<td>: ' . $data_page6->imperfect_min . '</td>
	</tr>
	<tr>
		<td width=40%>
			Max. Tolerance
		</td>
		<td>: ' . $data_page6->imperfect_max . '</td>
	</tr>
	<tr>
		<td width=40%>
			Results
		</td>
		<td>: ' . $data_page6->imperfect_results . '</td>
	</tr>
	<tr>
		<td width=40%>
			Status
		</td>
		<td>: ' . $data_page6->imperfect_status . '</td>
	</tr>
</table>

<table width=100% >
	<tr>
		<td colspan=2 style="background-color:green;  color: white">
			THREAD LEAD
		</td>
	<tr>
	<tr>
		<td width=40%>
			Unit
		</td>
		<td>: ' . $data_page7->lead_unit . '</td>
	</tr>
	<tr>
		<td width=40%>
			Gage Number
		</td>
		<td>: ' . $data_page7->lead_no . '</td>
	</tr>
	<tr>
		<td width=40%>
			Min. Tolerance
		</td>
		<td>: ' . $data_page7->lead_min . '</td>
	</tr>
	<tr>
		<td width=40%>
			Max. Tolerance
		</td>
		<td>: ' . $data_page7->lead_max . '</td>
	</tr>
	<tr>
		<td width=40%>
			Results 1
		</td>
		<td>: ' . $data_page7->lead_results1 . '</td>
	</tr>
	<tr>
	<td width=40%>
		Results 2
	</td>
	<td>: ' . $data_page7->lead_results2 . '</td>
</tr>
	<tr>
		<td width=40%>
			Status
		</td>
		<td>: ' . $data_page7->lead_status . '</td>
	</tr>
</table>

<table width=100% >
	<tr>
		<td colspan=2 style="background-color:green;  color: white">
			THREAD CUMMULATIVE LEAD
		</td>7
	<tr>
	<tr>
		<td width=40%>
			Unit
		</td>
		<td>: ' . $data_page7->cummulative_unit . '</td>
	</tr>
	<tr>
		<td width=40%>
			Gage Number
		</td>
		<td>: ' . $data_page7->cummulative_no . '</td>
	</tr>
	<tr>
		<td width=40%>
			Min. Tolerance
		</td>
		<td>: ' . $data_page7->cummulative_min . '</td>
	</tr>
	<tr>
		<td width=40%>
			Max. Tolerance
		</td>
		<td>: ' . $data_page7->cummulative_max . '</td>
	</tr>
	<tr>
		<td width=40%>
			Results
		</td>
		<td>: ' . $data_page7->cummulative_results . '</td>
	</tr>
	<tr>
		<td width=40%>
			Status
		</td>
		<td>: ' . $data_page7->cummulative_status . '</td>
	</tr>
</table>
	</td>
	
	<td width=50% valign="top">

	<table width=100% >
	<tr>
		<td colspan=2 style="background-color:green;  color: white">
			THREAD DIAMETER
		</td>
	<tr>
	<tr>
		<td width=40%>
			Unit
		</td>
		<td>: ' . $data_page8->diameter_unit . '</td>
	</tr>
	<tr>
		<td width=40%>
			Gage Number
		</td>
		<td>: ' . $data_page8->diameter_no . '</td>
	</tr>
	<tr>
		<td width=40%>
			Min. Tolerance
		</td>
		<td>: ' . $data_page8->diameter_min . '</td>
	</tr>
	<tr>
		<td width=40%>
			Max. Tolerance
		</td>
		<td>: ' . $data_page8->diameter_max . '</td>
	</tr>
	<tr>
		<td width=40%>
			Min. Results
		</td>
		<td>: ' . $data_page8->diameter_minresults . '</td>
	</tr>
	<tr>
		<td width=40%>
			Max. Results
		</td>
		<td>: ' . $data_page8->diameter_maxresults . '</td>
	</tr>
	<tr>
		<td width=40%>
			Average
		</td>
		<td>: ' . $data_page8->diameter_average . '</td>
	</tr>
	<tr>
		<td width=40%>
			Status
		</td>
		<td>: ' . $data_page8->diameter_status . '</td>
	</tr>
</table>


	<table width=100% >
	<tr>
		<td colspan=2 style="background-color:green;  color: white">
			THREAD OVALITY
		</td>
	<tr>
	<tr>
		<td width=40%>
			Unit
		</td>
		<td>: ' . $data_page8->ovality_unit . '</td>
	</tr>
	<tr>
		<td width=40%>
			Gage Number
		</td>
		<td>: ' . $data_page8->ovality_no . '</td>
	</tr>
	<tr>
		<td width=40%>
			Max. Tolerance
		</td>
		<td>: ' . $data_page8->ovality_max . '</td>
	</tr>
	<tr>
		<td width=40%>
			Min. Results
		</td>
		<td>: ' . $data_page8->ovality_results . '</td>
	</tr>
	<tr>
		<td width=40%>
			Status
		</td>
		<td>: ' . $data_page8->ovality_status . '</td>
	</tr>
</table>
	
<table width=100% >
<tr>
	<td colspan=2 style="background-color:green;  color: white">
		STAND OF
	</td>
<tr>
<tr>
	<td width=40%>
		Unit
	</td>
	<td>: ' . $data_page9->stand_unit . '</td>
</tr>
<tr>
	<td width=40%>
		Gage Number
	</td>
	<td>: ' . $data_page9->stand_no . '</td>
</tr>
<tr>
	<td width=40%>
		Min. Tolerance
	</td>
	<td>: ' . $data_page9->stand_min . '</td>
</tr>
<tr>
	<td width=40%>
		Max. Tolerance
	</td>
	<td>: ' . $data_page9->stand_max . '</td>
</tr>

<tr>
	<td width=40%>
		Results
	</td>
	<td>: ' . $data_page9->stand_results . '</td>
</tr>
<tr>
	<td width=40%>
		Status
	</td>
	<td>: ' . $data_page9->stand_status . '</td>
</tr>
</table>

<table width=100% >
<tr>
	<td colspan=2 style="background-color:green;  color: white">
		SEAL RING GROOVE A
	</td>
<tr>
<tr>
	<td width=40%>
		Unit
	</td>
	<td>: ' . $data_page9->stand_unit . '</td>
</tr>
<tr>
	<td width=40%>
		Gage Number
	</td>
	<td>: ' . $data_page9->stand_no . '</td>
</tr>
<tr>
	<td width=40%>
		Min. Tolerance
	</td>
	<td>: ' . $data_page9->stand_min . '</td>
</tr>
<tr>
	<td width=40%>
		Max. Tolerance
	</td>
	<td>: ' . $data_page9->stand_max . '</td>
</tr>

<tr>
	<td width=40%>
		Results
	</td>
	<td>: ' . $data_page9->stand_results . '</td>
</tr>
<tr>
	<td width=40%>
		Status
	</td>
	<td>: ' . $data_page9->stand_status . '</td>
</tr>
</table>

<table width=100% >
<tr>
	<td colspan=2 style="background-color:green;  color: white">
		SEAL RING GROOVE B
	</td>
<tr>
<tr>
	<td width=40%>
		Unit
	</td>
	<td>: ' . $data_page9->stand_unit . '</td>
</tr>
<tr>
	<td width=40%>
		Gage Number
	</td>
	<td>: ' . $data_page9->stand_no . '</td>
</tr>
<tr>
	<td width=40%>
		Min. Tolerance
	</td>
	<td>: ' . $data_page9->stand_min . '</td>
</tr>
<tr>
	<td width=40%>
		Max. Tolerance
	</td>
	<td>: ' . $data_page9->stand_max . '</td>
</tr>

<tr>
	<td width=40%>
		Results
	</td>
	<td>: ' . $data_page9->stand_results . '</td>
</tr>
<tr>
	<td width=40%>
		Status
	</td>
	<td>: ' . $data_page9->stand_status . '</td>
</tr>
</table>

<table width=100% >
<tr>
	<td colspan=2 style="background-color:green;  color: white">
		SEAL RING GROVE C
	</td>
<tr>
<tr>
	<td width=40%>
		Unit
	</td>
	<td>: ' . $data_page9->stand_unit . '</td>
</tr>
<tr>
	<td width=40%>
		Gage Number
	</td>
	<td>: ' . $data_page9->stand_no . '</td>
</tr>
<tr>
	<td width=40%>
		Min. Tolerance
	</td>
	<td>: ' . $data_page9->stand_min . '</td>
</tr>
<tr>
	<td width=40%>
		Max. Tolerance
	</td>
	<td>: ' . $data_page9->stand_max . '</td>
</tr>

<tr>
	<td width=40%>
		Results
	</td>
	<td>: ' . $data_page9->stand_results . '</td>
</tr>
<tr>
	<td width=40%>
		Status
	</td>
	<td>: ' . $data_page9->stand_status . '</td>
</tr>
</table>


<table width=100% >
<tr>
	<td colspan=2 style="background-color:green;  color: white">
		SUMMARY
	</td>
<tr>
<tr>
	<td width=40%>
		Summary Product
	</td>
	<td>: ' . $data_page9->summary_product . '</td>
</tr>
<tr>
	<td width=40%>
		Remark
	</td>
	<td>: ' . $data_page9->summary_remark . '</td>
</tr>
</table>

	</td>
</table>
';


		$mpdf->WriteHTML("<h2 style='text-align:center'>BUTTRESS THREAD INSPECTION REPORT - COUPLING </h2>");
		$mpdf->WriteHTML($page1);
		$mpdf->WriteHTML($page2);
		//$mpdf->WriteHTML("Evaluation : ".$evaluation. "<br>");
		//$mpdf->WriteHTML("Nik :".$nik."<br>");
		$mpdf->Output();
	}
}








/* End of file upload.php */
/* Location: ./system/application/controllers/admin/login.php */
