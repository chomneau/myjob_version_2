{{--<div class="step2">--}}
<div style="margin-top: 20px">
    <h4>Job Details</h4>
    <hr>
</div>
<div class="clearfix"></div>

<div class="row">
    <div class="col-md-6">
        <label for="exampleInputEmail1">Job Category</label>
        <select name="jobCategory" id="" class="form-control" required>
            <option value=" ">--select job category --</option>
            @if(count($category))
                @foreach($category as $categories)
                    <option value="{{ $categories->id }}"
                        @if($job->category_id  == $categories->id)
                            selected
                        @endif
                    >{{ $categories->name }}</option>
                @endforeach
            @endif
            {{--<option value="Part time">Accounting</option>--}}
            {{--<option value="Volunteer">Telecommunication</option>--}}
        </select>
    </div>

    <div class="col-md-6">
        <label for="exampleInputEmail1"> Contract type</label>
        <select name="jobContract" id="" class="form-control" required >
            <option value=" ">--select contract type --</option>
            @if(count($contractType))
                @foreach($contractType as $contractTypes)
                    <option value="{{ $contractTypes->id }}"
                        @if($job->contractType_id  == $contractTypes->id)
                            selected
                        @endif
                    >{{ $contractTypes->name }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>

<div class="space"style="margin-top: 10px"></div>

<div class="row">
    <div class="col-md-6">
        <label for="jobSalary">Salary</label>
        <select name="jobSalary" id="heard" class="form-control" required>
            <option value="">--select salary range--</option>

            @if(count($salaryRange))
                @foreach($salaryRange as $salaryRanges)
                    <option value="{{ $salaryRanges->id }}"
                       @if($job->salaryRange_id  == $salaryRanges->id)
                            selected
                       @endif
                    >{{ $salaryRanges->name }}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="col-md-6">
        <label for="jobHiring">Number of hire</label>
        <input type="number" name="jobHiring" value="{{ $job->hire }}" class="form-control" placeholder="number of hire" required>
    </div>

    
</div>

<div class="row" style="margin-top:15px">
    <div class="col-md-12">
        <label for="jobLocation">Job Location</label>
        <select name="jobLocation[]" id="jobLocation" class="form-control select2-multi" required multiple="multiple">
            <option value="">--select job location--</option>
            @if(count($location))
                @foreach($location as $locations)
                    <option value="{{ $locations->id }}"
                        @if(isset($job))
                            @if($job->hasLocation($locations->id))
                            selected
                            @endif
                            
                        @endif
                    >{{ $locations->name }}</option>
                @endforeach
            @endif


        </select>
    </div>
</div>

<div class="space"style="margin-top: 10px"></div>
<div class="row">
    
    {{--dateline picker--}}
    <div class="col-md-12">
        <label for="exampleInputEmail1">Job Deadline</label>
        <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_2 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>

        <fieldset>
            <div class="xdisplay_inputx form-group has-feedback">
                <input type="text" name="jobDeadLine" class="form-control has-feedback-left" id="single_cal2" placeholder="deadline" aria-describedby="inputSuccess2Status2" required>
                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                <span id="inputSuccess2Status2" class="sr-only">(success)</span>
            </div>
        </fieldset>
        {{--end dateline picker--}}
    </div>
</div>
{{--</div>--}}