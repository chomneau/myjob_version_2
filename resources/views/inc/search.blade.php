
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="slogon col-lg-12 col-md-12 col-sm-12">
    <h1 class="text-center" style="color: #17E7EF ;padding-top: 2em;font-family: 'Anton', sans-serif; letter-spacing: 2px;">FIND YOUR DREAM JOB TODAY!</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <form class="form-wrapper cf" action="{{route('result')}}" method="get">
            
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" name="query" placeholder="Search Job title here..." />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>

        </form>
        </div>
    </div>
</div>