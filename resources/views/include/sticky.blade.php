


<link rel="stylesheet" href="{{ url('frontend/css/stick.css') }}">
<div class="stick-right">
    <div class="d-load">
        <span>
            <a href="#feedbackModal4" data-toggle="modal">Feedback</a>
            {{-- <a href=">Login / Signup</a></li> --}}
        </span>
    </div>
</div>
@include('include.feedback')
{{-- <div id="feedback">
	<a href="#popup1">Quick Enquiry</a>
</div> --}}

<style>
    .d-load {
        position: fixed;
        bottom: 8%;
        right: 0px;
        z-index: 9999;
    }

    .d-load span {
        font-size: 15px;
        position: relative;
        transform: rotate(90deg);
        transform-origin: right top;
        color: #fff;
        display: block;
        background: #2d3091;
        padding: 6px 15px;
        border-radius: 4px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .d-load span a {
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
    }



    #feedbackModal4.modal-style-3 .modal-content {
        /* background: #0b0b1f; */
        color: #2d3091 !important;
        border: 5px #2d3091 solid;
        border-radius: 30px;
    }

    #feedbackModal4.modal-style-3 .btn-signin {
        border-radius: 25px;
        width: 100%;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        border: 1px solid #009688;
        background: #2d3091;
    }

    #feedbackModal4.modal-style-3 .modal-login .form-control~i {
        position: absolute;
        top: 12px;
        left: 15px;
        color: #2d3091;

    }

    #feedbackModal4.modal-style-3 .modal-login input {
        border: solid rgba(0, 0, 0, 0.562) 1px;
    }

    #feedbackModal4.modal-style-3 .modal-login select {
        border: solid rgba(0, 0, 0, 0.562) 1px;
    }

    #feedbackModal4.modal-style-3 .modal-login textarea {
        border: solid rgba(0, 0, 0, 0.562) 1px;
    }
</style>
