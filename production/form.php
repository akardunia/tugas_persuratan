<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<!-- Include Bootstrap Wizard -->
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.min.js"></script>

<style type="text/css">
#installationForm .tab-content {
    margin-top: 20px;
}
</style>
</head>

<body>

<div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Date Mask</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone mask</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Custom Mask</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask': '99-999999'">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Serial Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '****-****-****-****-****-***'">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">TaxID Mask</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '99-99999999'">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Credit Card Mask</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask' : '9999-9999-9999-9999'">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                            <section class="fuelux">
                                <div id="MyWizard" class="wizard">
                                    <ul class="steps">
                                        <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Trin 1<span class="chevron"></span>
                                        </li>
                                        <li data-target="#step2"><span class="badge">2</span>Trin 2<span class="chevron"></span>
                                        </li>
                                        <li data-target="#step3"><span class="badge">3</span>Trin 3<span class="chevron"></span>
                                        </li>
                                    </ul>
                                    <div class="actions">
                                        <button type="button" class="btn btn-default btn-mini btn-prev"> <i class="fa fa-chevron-left"></i> Tilbage</button>

                                        <button type="button" class="btn btn-primary btn-mini btn-next" data-last="Afslut">Videre <i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="step-content" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
                                    <div class="step-pane active" id="step1">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-7">
                                                    <h2 class="title">Opret din konto nu</h2>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type='text' name='username' id='username' class="form-control" placeholder="Brugernavn" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type='text' name='firstname' id='firstname' class="form-control" placeholder="Navn" />
                                                </div>

                                                <div class="col-sm-6">
                                                    <input type='text' name='lastname' id='lastname' class="form-control" placeholder="Efternavn">
                                                </div>
                                            </div>

                                           <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type="password"
                         name="password" 
                         id="password" class="form-control" placeholder="Adgangskode" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password"
                         name="confirmpwd" 
                         id="confirmpwd" class="form-control" placeholder="Gentag adgangskode" />
                                                </div>
                                            </div>

                                            <div class="">
                                                <p class="">Ved at klikke på Videre accepterer du vores 
                                                <a href="#">Vilkår og betingelser</a> 
                                                og herunder vores <a href="#">Brug af cookies</a>.</p>
                                            </div>
                                                                                        <button type="button" 
               value="Register" 
               onclick="return regformhash(this.form,
                               this.form.username,
                               this.form.email,
                               this.form.password,
                               this.form.confirmpwd);" class="btn btn-info btn-mini">Opret profil <i class="fa fa-chevron-right"></i></button>
                                        </form>
                                    </div>
                                    <div class="step-pane" id="step2">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-7">
                                                    <h2 class="title">Fortæl os lidt mere om dig</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Navn">
                                                </div>

                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" placeholder="Efternavn">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type='text' name='streetname' id='streetname' class="form-control" placeholder="Vejnavn">
                                                </div>

                                                <div class="col-sm-2">
                                                    <input type='text' name='streetnumber' id='streetnumber' class="form-control" placeholder="Nr">
                                                </div>

                                                <div class="col-sm-2">
                                                    <input type="text" name='streetfloor' id='streetfloor' class="form-control" placeholder="Etage">
                                                </div>

                                                <div class="col-sm-2">
                                                    <input type="text" name='street' id='streethand' class="form-control" placeholder="Side">
                                                </div>                                                  
                                            </div>
                                           <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type="text" name='postalcode' id='postalcode' class="form-control" placeholder="Postnr.">
                                                </div>

                                                <div class="col-sm-6">
                                                    <input type="text" name='city' id='city' class="form-control" placeholder="By">
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <div class="col-sm-6">
                                                    <input type="text" name='phonenumber' id='phonenumber'  class="form-control" placeholder="Telefon">
                                                </div>

                                                <div class="col-sm-6">
                                                    <input type="text" name='mobilenumber' id='mobilenumber' class="form-control" placeholder="Mobil">
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" placeholder="E-mail">
                                                </div>                                             
                                            </div>

                                           <div class="form-group">
                                                <div class="col-sm-4">
                                                    <select class="form-control" title="Civilstatus" data-live-search="true">
                                                        <option>Civilstatus</option>
                                                        <option>Enlig</option>
                                                        <option>Gift</option>
                                                        <option>Samlevende</option>
                                                    </select>
                                                </div>     

                                                <div class="col-sm-4">
                                                    <select class="form-control" title="Husejer?" data-live-search="true">
                                                        <option>Husejer?</option>
                                                        <option>Ja</option>
                                                        <option>Nej</option>
                                                    </select>
                                                </div>  

                                                <div class="col-sm-4">
                                                    <select class="form-control" title="Antal børn" data-live-search="true">
                                                        <option>Antal børn</option>
                                                        <option>0</option>
                                                        <option>1-2</option>
                                                        <option>3-5</option>
                                                    </select>
                                                </div>  
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select class="form-control" title="Nuværende forsikring(er)" data-live-search="true">
                                                        <option>Nuværende forsikring(er)</option>
                                                        <option>GF Forsikring</option>
                                                        <option>Tryg</option>
                                                        <option>Gjensidige Forsikring</option>
                                                        <option>Alm. Brand</option>
                                                        <option>Vejle Brand</option>
                                                        <option>Codan</option>
                                                        <option>Nykredit Forsikring</option>
                                                        <option>Danske Forsikring</option>
                                                        <option>If Forsikring</option>
                                                        <option>Mølholm Forsikring</option>
                                                        <option>NEM Forsikring</option>
                                                        <option>Mondux Forsikring</option>
                                                        <option>FDM Forsikring</option>
                                                        <option>Topdanmark</option>
                                                        <option>Alka Forsikring</option>
                                                    </select>
                                                </div>                                                  
                                            </div>
                                        </form>
                                    </div>
                                    <div class="step-pane" id="step3">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-7">
                                                    <h2 class="title">Registrer din første ejendel</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" placeholder="Produktnavn">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" placeholder="Serie-, Stel-, IMEI-, eller Reg-. nr.:">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <select class="form-control" title="Mærke" data-live-search="true">
                                                        <option>Mærke</option>
                                                        <option>Test1</option>
                                                        <option>Test2</option>
                                                        <option>Test3</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select class="form-control" title="Model" data-live-search="true">
                                                        <option>Model</option>
                                                        <option>Test1</option>
                                                        <option>Test2</option>
                                                        <option>Test3</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control" placeholder="Ny pris">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <select class="form-control" title="Vælg forsikringsselskab" data-live-search="true">
                                                        <option>Vælg forsikringsselskab</option>
                                                        <option>GF Forsikring</option>
                                                        <option>Tryg</option>
                                                        <option>Gjensidige Forsikring</option>
                                                        <option>Alm. Brand</option>
                                                        <option>Vejle Brand</option>
                                                        <option>Codan</option>
                                                        <option>Nykredit Forsikring</option>
                                                        <option>Danske Forsikring</option>
                                                        <option>If Forsikring</option>
                                                        <option>Mølholm Forsikring</option>
                                                        <option>NEM Forsikring</option>
                                                        <option>Mondux Forsikring</option>
                                                        <option>FDM Forsikring</option>
                                                        <option>Topdanmark</option>
                                                        <option>Alka Forsikring</option>
                                                    </select>
                                                </div>                                                  

                                                <div class="col-sm-4">
                                                    <select class="form-control" title="Vælg forsikring" data-live-search="true">
                                                        <option>Vælg forsikring</option>
                                                        <option>GF Forsikring</option>
                                                        <option>Tryg</option>
                                                        <option>Gjensidige Forsikring</option>
                                                        <option>Alm. Brand</option>
                                                        <option>Vejle Brand</option>
                                                        <option>Codan</option>
                                                        <option>Nykredit Forsikring</option>
                                                        <option>Danske Forsikring</option>
                                                        <option>If Forsikring</option>
                                                        <option>Mølholm Forsikring</option>
                                                        <option>NEM Forsikring</option>
                                                        <option>Mondux Forsikring</option>
                                                        <option>FDM Forsikring</option>
                                                        <option>Topdanmark</option>
                                                        <option>Alka Forsikring</option>
                                                    </select>
                                                </div>                                                  

                                                <div class="col-sm-4">
                                                    <button type="submit" class="form-control btn btn-primary">
                                                        Anmeld
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

            <div class="row">
                <div class="col-md-12">
                            <form action="forms-upload.php" class="dropzone" id="my-awesome-dropzone" enctype="multipart/form-data">
                            </form>
                </div>
            </div>
                                    </div>
                                </div>

                            </section>
<script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
</body>

</html>