<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url(); ?>images/logo.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <title><?php echo $title; ?></title>
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/file_upload.js"></script>
</head>

<body>
    <center>
        <div class="col-md-12 qlink">

            <h1 class="hd">Employee Engagement Survey Template</h1>
            <div class="qlink_images">
                <form>
                    <div class="tab-content">
                        <div class="tab-pane active" id="rA">
                            <h2>Employee Information</h2>
                            <hr>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label class="pull-left">Your SAP Email <span style="color: red;">*</span></label>
                                    <input type="email" placeholder="Your staff appraisal Portal Email" id="staff_email" name="staff_email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12 text-left">
                                    <p><label> 1. What is your job role? <span style="color: red;">*</span></label></p>

                                    <label class="rad-label">
                                        <input type="radio" class="rad-input" name="role" value="Team Lead">
                                        <div class="rad-design"></div>
                                        <div class="rad-text">Team Lead</div>
                                    </label>

                                    <label class="rad-label">
                                        <input type="radio" class="rad-input" name="role" value="Manager">
                                        <div class="rad-design"></div>
                                        <div class="rad-text">Manager</div>
                                    </label>

                                    <label class="rad-label">
                                        <input type="radio" class="rad-input" name="role" value="Senior Manager">
                                        <div class="rad-design"></div>
                                        <div class="rad-text">Senior Manager</div>
                                    </label>

                                    <label class="rad-label">
                                        <input type="radio" class="rad-input" name="role" value="Regional Manager">
                                        <div class="rad-design"></div>
                                        <div class="rad-text">Regional Manager</div>
                                    </label>

                                    <label class="rad-label">
                                        <input type="radio" class="rad-input" name="role" value="Management / C-Level">
                                        <div class="rad-design"></div>
                                        <div class="rad-text">Management / C-Level</div>
                                    </label>

                                    <label class="rad-label">
                                        <input type="radio" class="rad-input" name="role" value="Volunteer">
                                        <div class="rad-design"></div>
                                        <div class="rad-text">Volunteer</div>
                                    </label>

                                    <label class="rad-label">
                                        <input type="radio" class="rad-input" name="role" value="Other">
                                        <div class="rad-design"></div>
                                        <div class="rad-text">Other</div>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label class="pull-left">2. What unit do you work in? <span style="color: red;">*</span></label>
                                    <select id="unit" name="unit">
                                        <option value="">Select Unit</option>
                                        <?php foreach ($unit as $unit) { ?>
                                            <option value="<?php echo $unit['unit_id']; ?>"><?php echo $unit['unit_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <ul class="pull-right">
                                <li>
                                    <a class="movementBtn" href="javascript:void(0);" onclick="openEvent(event, 'rB')"> Next &nbsp;<i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--===============================/.rA==================================-->
                        <div class="tab-pane" id="rB">
                            <?php $this->load->view('questions/1'); ?>
                        </div>
                        <!--===============================/.rB==================================-->
                        <div class="tab-pane" id="rC">
                            <?php $this->load->view('questions/2'); ?>
                        </div>
                        <!--===============================/.rC==================================-->
                        <div class="tab-pane" id="rD">
                            <?php $this->load->view('questions/3'); ?>
                        </div>
                        <!--===============================/.rD==================================-->
                        <div class="tab-pane" id="rE">
                            <?php $this->load->view('questions/4'); ?>
                        </div>
                        <!--===============================/.rE==================================-->
                        <div class="tab-pane" id="rF">
                            <?php $this->load->view('questions/5'); ?>
                        </div>
                        <!--===============================/.rF==================================-->
                    </div>
                </form>
            </div>
        </div>
    </center>
</body>

</html>


<script src="<?php echo base_url(); ?>js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>js/custom.js"></script>



<script>
    function openEvent(evt, eventName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-pane");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        // document.getElementById(eventName).style.display = "block";
        $('#' + eventName).fadeIn('slow');
        evt.currentTarget.className += " active";
    }


    $('.submitSurveyBtn').on('click', function() {
        var response;
        var count;
        var role = $('[name="role"]:checked').val();
        var unit = $('[name="unit"]').val();
        var opinion = $('[name="8"]').val();
        var staff_email = $('[name="staff_email"]').val();
        if (!staff_email) {
            $('[name="staff_email"]').focus();
            alert('Your Email is required');
            return false;
        }
        var totalCount = $('.surveyAnswer:checked').length;
        $('.surveyAnswer').each(function() {
            if ($(this).prop("checked")) {
                $.ajax({
                    url: "<?php echo base_url() ?>home/submitSurvey",
                    type: "post",
                    dataType: "json",
                    data: {
                        id: $(this).attr('name'),
                        ans: $(this).val(),
                        role: role,
                        unit: unit,
                        staff_email: staff_email,
                        opinion: opinion
                    },
                    success: function(data) {
                        if (data == 'successful') {
                            $('.submitSurveyBtn').html('Please Wait <span class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></span>');
                            setTimeout(function() {
                                surveyDone();
                            }, 6000);
                        } else {
                            surveyFailed();
                        }
                    }
                });
            }
        });
    });



    function surveyDone() {
        $('.hd').fadeOut('slow');
        $('.tab-content').html(
            '<div class="completed">' +
            '<div class="content">' +
            '<h1><i class="fa fa-check"></i> Thank you</h1>' +
            '<h3>For taking the survey questions</h3>' +
            '<h5>Refreshing page shortly</h5>' +
            '</div>' +
            '</div>'
        );
        setTimeout(function() {
            window.location.reload();
        }, 6000);
    }

    function surveyFailed() {
        $('#errorModal .errorModal').html(
            '<div class="content">' +
            '<h2><i class="fa fa-exclamation-triangle"></i> Oops</h2>' +
            '<h3>There was an error submitting your survey: <i class="text-danger">Email Address does not Exist</i></h3>' +
            '</div>'
        );
        $('#errorModal').show();
    }
</script>



<div id="errorModal" class="modal">
    <form class="modal-content" style="background-color:#14192c;">
        <div class="panel panel-default" style="background-color:#14192c; border:0px;">
            <div class="panel-body">
                <div class="table-responsive errorModal">


                </div>
                <a href="javascript:void(0);" onclick="$('.modal').hide();" class="movementBtn pull-right">Close</a>
            </div>
        </div>
    </form>
</div>