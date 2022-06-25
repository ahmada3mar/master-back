<div style="padding: 15px;  ">
<h3>Dear <span style="color:orange">{{$user->name}}</span> </h3>
<h4>Your Evaluation has been publishid </h4>
<h4>On. {{date('Y-m-d H:i:s')}} </h4>
    <h3 style="color:orange ; text-align: center;">Evaluation Result</h3>
    <div  >
        

         
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                Agility :
                <label style="color:orange ; padding-right:10px ; padding-left:10px"> {{$agility ?? "N/A"}} </label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                Team Work :
                <label style="color:orange ; padding-right:10px ; padding-left:10px"> {{$team_work ?? "N/A" }}</label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                Leadership Skill :
                <label style="color:orange ; padding-right:10px ; padding-left:10px"> {{$leadership_skill ?? "N/A"}} </label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                Time Management :
                <label style="color:orange ; padding-right:10px ; padding-left:10px"> {{$time_management ?? "N/A"}} </label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                Presentation Skills :
                <label style="color:orange ; padding-right:10px ; padding-left:10px">
                    {{$presentation_skills ?? "N/A"}}
                </label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                Oral Expression :
                <label style="color:orange ; padding-right:10px ; padding-left:10px"> {{$oral_expression ?? "N/A"}} </label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                Quality Of The Answers :
                <label style="color:orange ; padding-right:10px ; padding-left:10px">
                    {{$quality_of_the_answers ?? "N/A"}}
                </label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                Business Ethics :
                <label style="color:orange"> {{$business_ethics ?? "N/A"}} </label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                Note : <label style="color:orange"> {{$note ?? "N/A"}} </label>
            </div>
            

            
            
        </div>
       
<img style="margin-top: 50px;" src="https://www.orange.jo/EN/PublishingImages/coding-academy_en.png" alt="">
</div>