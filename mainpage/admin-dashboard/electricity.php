<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
// include('config.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Electricity Bill</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>

                <!-- /.card -->
    <div class="wpb_wrapper">
        <div class="contact-box" style="text-align: center;">
<h5 style="text-align: center;">MAHAVITARAN Bill Payment</h5>
<form action="https://wss.mahadiscom.in/wss/wss" method="get" target="_new">Consumer No :<br />
<input maxlength="12" name="A" pattern="^\d{12}$" required="Yes" type="text" value="" data-wahfont="30" /><br />
<input name="uiActionName" type="hidden" value="getPaymentDetail_Link" /><br />
<input id="terms" name="terms" required="Yes" type="checkbox" data-wahfont="90" />I agree </a> <input class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-juicy-pink" name="submit" type="submit" value="Pay Now" /></form>
</div>
<p>
    
<div class="container">
                    <h1 class="text-center page-title" data-wahfont="35">Conditions for Online Payment</h1><div class="divider"></div><article id="post-9687" class="post-9687 page type-page status-publish hentry">
                
                <div class="entry-content">
                    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
          <ol>
            <li>International cards are blocked for paying MSEDCL bills.</li>
            <li>Please note that a convenience fee i.e. Gateway charges levied by Master/Visa/others will be applicable for credit card exceeding Rs. 500 .Gateway charges are waived Off for Net Banking , Debit card , UPI, Digital Wallet &amp; Cash Card payments.</li>
            <li>In case of duplicate/multiple payment and advance payment for a single bill, credit for the extra amount paid will be passed on in the subsequent bill.</li>
            <li>To avoid fradulent transaction, it is recommended not to reveal details of your card to anybody; make payment yourself without going through any channels/agents.</li>
            <li>Do not open multiple payment windows simultaneously. For multiple consumer numbers, make payments one at a time.</li>
            <li>In case of Online payment after due date, Consumer agrees to the conditions mentioned in disclaimer.</li>
            <li>If consumer choose corporate Banking option for payment , Checker Final approval date will be considered as receipt date.</li>
            <li>Please note transaction completion date will be treated as receipt date for credit/updation to consumer ledger.</li>
            <li>You can choose an alternate Payment Gateway, in case of online payment failure.</li>
            </ol>
             </div>
        </div>
            </div></div></div></div>
			</div>
      
<?php
include('includes/footer.php');
?>