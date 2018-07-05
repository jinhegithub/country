<?php 
echo "this code is cURL sample code. <br /> Cross site ";

?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>php ajax country state city dropdown</title>
    <meta charset="utf-8">
    <meta name="Keywords" content="php ajax country state city dropdown">
    <meta name="Description" content="php ajax country state city dropdown">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

<body>
    <div class="container">
        <h2>Country Code GET </h2>
        <p><span><code>php function filegetcontents</code></span></p>
        <div class="row">
            <form action="#" role="form" class="form-horizontal" id="location" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <div class="col-sm-4">
                        <select name="country" class="form-control countries" id="countryId" required="required">
                                <option value="">Select Country</option>
                            </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <select name="state" class="form-control states" id="stateId" required="required">
                                <option value="">Select State</option>
                            </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <select name="city" class="form-control cities" id="cityId" required="required">
                                <option value="">Select City</option>
                            </select>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/location.js"></script>

</body>

</html>



<!-- http://lab.iamrohit.in/php_ajax_country_state_city_dropdown/apiv1.php?type=getCountries
_country_state_city_dropdown/apiv1.php?type=getCities&stateId=8888 http://lab.iamrohit.in/php_ajax_country_state_city_dropdown/apiv1.php?type=getStates&countryId=101 http://lab.iamrohit.in/php_ajax-->