<div style="padding: 15px;  ">
<h4>Public Request</h4>
<h4>On. {{date('Y-m-d H:i:s')}} </h4>
<h4>From. {{$name}} </h4>
    <h3 style="color:orange ; text-align: center;">Details</h3>
    <div  >
        

         
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                subject :
                <label style="color:orange ; padding-right:10px ; padding-left:10px"> {{$subject ?? "N/A"}} </label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                Name :
                <label style="color:orange ; padding-right:10px ; padding-left:10px"> {{$name ?? "N/A" }}</label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                E-mail:
                <label style="color:orange ; padding-right:10px ; padding-left:10px"> {{$email ?? "N/A"}} </label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                Mobile:
                <label style="color:orange ; padding-right:10px ; padding-left:10px"> {{$mobile ?? "N/A"}} </label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                City :
                <label style="color:orange ; padding-right:10px ; padding-left:10px"> {{$city ?? "N/A"}} </label>
            </div>
            <div style="flex: 0 0 33.333333%; max-width: 33.333333%;">
                Message :
                <label style="color:orange ; padding-right:10px ; padding-left:10px">
                    {{$publicmessage ?? "N/A"}}
                </label>
            </div>
            
        </div>
       
<img style="margin-top: 50px;" src="https://www.orange.jo/EN/PublishingImages/coding-academy_en.png" alt="">
</div>