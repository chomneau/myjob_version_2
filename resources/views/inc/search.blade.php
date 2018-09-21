<link href="{{ asset('css/searchStyle.css') }}" rel="stylesheet">
<div class="search col-lg-12 col-md-12 col-sm-12">
    <div class="slogon col-lg-12 col-md-12 col-sm-12">
        <h1 class="text-center" style="color: #17E7EF ;padding-top: 2em;font-family: 'Anton', sans-serif; letter-spacing: 2px;">FIND YOUR DREAM JOB TODAY!</h1>
    </div>


    <div class="container" style="padding-top: 2em">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-4">
                <form class="form-wrapper cf" action="{{route('result')}}" method="get">
                    <input type="text" name="query" placeholder="Search Job title here..." required>
                    <button type="submit">Search</button>
                </form>
            </div>

            
        </div>

    </div>

</div>