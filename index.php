<html>

<head>
    <title></title>

  

    <script type="text/javascript" src="js/jquery.min.js"></script>

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="js/circletimer.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/highlight.min.js"></script>

    <link href="css/circletimer.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.7/styles/default.min.css">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pacifico|Raleway">  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">



    <script type="text/javascript" src="js/register_user.js"></script>

    <script type="text/javascript" src="js/authenticate_user.js"></script>

    <script type="text/javascript" src="js/store_performance.js"></script>

    <script type="text/javascript" src="js/load_menus.js"></script>

    <script type="text/javascript" src="js/logout.js"></script>





    <style>
::-webkit-scrollbar {
  display: none;
}
   

    .untyped

    {

        color:#505050 ;

    }



    .correct

    {

        color:#96e6a1;

    }



    .incorrect

    {

         color:tomato;

    }



    .focus

    {

      background: #222;  /* fallback for old browsers */
color: #ffffff;


    	border-radius : 5%;

    }



    body

    {
      background-color: default ;
      overflow: scroll;
    }



          html,body {
        font-family: "Lato", sans-serif;
      }



      .example {

        text-align: center;

      }



      /* Make sure the div you use for this is a square! */

      #example-timer {

        height: 100px;

        margin: 20px auto;

        width: 100px;

      }



      #cover

      {

        background: #009FFF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ec2F4B, #009FFF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ec2F4B, #009FFF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


      	opacity: .7;

      	width : 100%;

      	height:100%;

      	position:absolute;

      	z-index:1;

      }



      #details

      {
      	 width:600px;
      	 height:200px;
        position: absolute;
      	 z-index:+1;
        padding-top: 400px;
      }

.btn-danger{
  filter: opacity(100%);
}
.card-wrapper{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
  
.leaderboards{
  background-color: red;
  padding: 6px 20px;
  filter: opacity(70%);
  color: white;
  border-radius: 6px;
  margin-top: 8rem;
}
.btn-ui{
  background: linear-gradient(to right, #16bffd 30%, #cb3066 70%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align:center; border-radius:8px; border:none; text-transform:uppercase;  box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
    inset 4px 4px 8px rgba(209, 217, 230, 0.2),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2);
    transition: all 200ms ease-in;
    margin: 24px;
    padding: 8px 20px;
}
.btn-ui:hover {
  box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
  inset 6px 6px 16px rgba(156, 156, 156, 0.856),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2);
  transform: translateY(2px);
}
.heading-ui{
  background-color: #ffffff; 
  border: 2px solid #ffffff;
}
</style>

</head>



<body onload="initialize();load_menus(1)">



<div id="cover">



</div>


<div class="card-wrapper"> 
<div id = "details" >

     <div class="panel panel-default">

     <div class="panel-heading" style="text-transform:uppercase; font-family: Montserrat, Helvetica, sans-serif; font-size: 2rem; box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
    inset 4px 4px 8px rgba(209, 217, 230, 0.2),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2);"><center>CodingBattalion Online Typing Speed Test </center></div>

     <div class="panel-body" style="  box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
    inset 6px 6px 16px rgba(209, 217, 230, 0.8),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2);  border: 2px solid transparent; ">    	

     	<div class="form-group">

           <input class="form-control input-lg" id="name" type="text" style="box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
    inset 4px 4px 8px rgba(209, 217, 230, 0.2),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2);
  color: #96e6a1 ; border: 2px solid transparent;   border-radius: 12px;" placeholder=" Your Name Here..."> 

        </div>

     	<div class="form-group">

           <input class="form-control input-lg" id="password" type="text" style="    box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
    inset 4px 4px 8px rgba(209, 217, 230, 0.2),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2);
  color: #96e6a1 ; border: 2px solid transparent;  border-radius: 12px;" placeholder="Password"> 

        </div>

        

        <div id="button_replace">

       <button type="button" onclick="switch_buttons()" class="btn btn-success btn-ui">New user</button>

       <button type="button" onclick="authenticate_user()" class="btn btn-success btn-ui" name="continue">Continue</button>

        </div>

     </div>

</div>



<div id="message">



</div>

</div>
</div>







  

  
     
      <div class="navbar-brand" href="#"><h2 style="font-size:3rem ; color:black; 
       border-radius: 12px; position:absolute;text-transform:uppercase;font-weight:600; letter-spacing:3px;   box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
    inset 6px 6px 16px rgba(209, 217, 230, 0.8),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2);  font-family: Montserrat, Helvetica, sans-serif;  padding: 18px 8px;border: 2px solid transparent;">CodingBattalion Typing Test</h2></div>
     
    



    <div id="sesison" style="float:left; margin-top:20px ; margin-right:20px">

     



      <button style="float:left; margin-left:20px" class="btn btn-danger" onclick="logout()">Leave Page</button>                              

     

    </div>

    <div>

    </div>

  </div>

</nav>



<div class = "container-fluid">



    <div id="timer_rohit" style ="position:relative ; margin-top:60px ; float:right;">

        <label><span style=  "font-size: 2rem;
  padding: 18px 8px;
  border-top-left-radius: 12px;
  border-bottom-left-radius:12px;
  color: black;
  width: 100%;
  border: 2px solid transparent;
  font-family: Montserrat, Helvetica, sans-serif;
  box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
    inset 6px 6px 16px rgba(209, 217, 230, 0.8),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2);
    text-transform:uppercase;">Time Left : </span>

        <span style="font-size: 2rem;
  padding: 18px 8px;
  border-top-right-radius: 12px;
  border-bottom-right-radius:12px;
  color: black;
  text-transform:uppercase;
  width: 100%;
  border: 2px solid transparent;
  font-family: Montserrat, Helvetica, sans-serif;
  box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
    inset 6px 6px 16px rgba(209, 217, 230, 0.8),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2);"><span style="font-size:2rem; color: black" id="time-elapsed"></span>&nbsp; sec.</span></label>

    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------>



    <div class = "row" style="margin-top:150px; margin-left:225px;">



        <div class="col-md-2" style="margin-top:-50px; margin-right:40px; float:right;">



             <div class="example">

             <div id="example-timer"></div>

             </div>





             <div id = "timer" style="margin-left:50px;">

                  <!-- space for the clock -->

             </div>



        </div>



        <div class="col-md-6" style="margin-top:50px;">



        <div class="form-group">



            <div class="panel panel-success" style="width: 150%;">



                <div class="panel-heading heading-ui"  style="  box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
    inset 6px 6px 16px rgba(209, 217, 230, 0.8),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2);border: 2px solid transparent; background-color:#ffffff; border: 1px solid white;">

                   <center><span style="  background: linear-gradient(
    to right,
    #16bffd 40%,
    #cb3066 60%
  ); /* gradient text start  */
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; /* gradient text end  */ font-size:22px ;">Test how fast are your fingers ?</span></center>

                </div>



                <div class="panel-body" style="  box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
    inset 6px 6px 16px rgba(209, 217, 230, 0.8),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2);border: 2px solid transparent;">

                    <div id="display_space"style="border:3px solid white;width1020px;height:150px;overflow:hidden">

                        <!--p id ="display" style="padding:10px ; text-align:center ; font-size:28 ; line-height:170%; font-family:Times New Roman"></p-->

                    </div>

                </div>



                <div class="panel-footer" style="background-color: white;
                 box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
    inset 4px 4px 8px rgba(209, 217, 230, 0.2),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2); border: 2px solid transparent;">

                    <div class="form-group">

                        <textarea class="form-control" placeholder="press any key to begin" rows="1" wrap="off" id="typing_space" style="font-size:25px ; padding:10px; 
                          box-shadow: 7px 7px 15px #bbcfda, -4px -4px 13px #fff,
    inset 6px 6px 16px rgba(209, 217, 230, 0.8),
    inset -8px -8px 8px rgba(255, 255, 255, 0.2);
    border: 2px solid transparent;text-align:center;"></textarea>

                    </div>

                </div>



            </div>

        </div>

        </div>
    </div>
<div class="card-wrapper">
<label class="leaderboards">Leaderboards</label>
       


        <div class="col-md-4">

             <!--div id="button" onclick="scroll()" class="btn btn-primary" type="button" style="position:absolute ; margin-top:40px;" >scroll up</div-->

             


            <div id="rankings" style="margin-left : 30px ; margin-top:-10px">

                  <ul class="nav nav-tabs">

					  <li class="active" onclick = "load_menus(1)"><a data-toggle="tab" href="#menu1">World Ranking</a></li>

           </ul>


					<div class="tab-content">

					  <div id="menu1" class="tab-pane fade in active">

					     

					  </div>

					  <div id="menu2" class="tab-pane fade">

					    <h3>Menu 1</h3>

					    <p>Some content in menu 1.</p>

					  </div>

					    <div id="menu3" class="tab-pane fade">

					        <!--space for recents-->

					    </div>

					  </div>

					</div>

             </div>

        </div>



<!---------------------------------------------------------------------------------------------------------------------------------------------------------------->



</div> 





<script>



// FOR TIMER 

        var time_left = 60;

        var arr;      // to hold the string

        var arr_pointer = 0;

        var correct = 0;

        var incorrect = 0;

        var n = 0;

        var keystrokes = 0;

        var accuracy = 0;

        var stop;



        function timer()

        {

             var element = document.getElementById("time-elapsed"); 

             element.innerHTML = time_left;



             time_left--;



             if(time_left==-1)

             {

             	accuracy = Math.floor(correct/(correct+incorrect) * 100);

             	clearTimeout(stop);

                document.getElementById('typing_space').value = "time's up...";

                //"Correct = " + correct + " Incorrect = " + incorrect + "Keystrokes =" + keystrokes + "Accuracy : " + accuracy + "%";

                var wpm = Math.floor(correct);

                if(wpm<0)

                	wpm=0;



                document.getElementById('display_space').innerHTML = '<div style="margin-left:88px"><table class="table" style="font-size:20px;margin-bottom:0 ;margin-top : 7px"><tr><td><span>Correct : ' + correct + '</span></td><td><span>Incorrect = ' + incorrect + '</span></td></tr><tr><td>Keystrokes : ' + keystrokes + '</td><td>Accuracy : ' + accuracy + '%</td></tr><tr style="text-align:center"><td colspan = "2"><span>Words per minute : ' + wpm +'<td></span></tr><div>';



             	$('input[type="text"], textarea').attr('readonly','readonly');

                store_performance(wpm , correct , incorrect , keystrokes , accuracy);
              
              load_menus(1);
                             
        // alert('Result successfully saved');
        // window.open('index.php','_self');

                //document.getElementById('display').innerHTML = "Correct = " + correct + " Incorrect = " + incorrect + "Keystrokes =" + keystrokes + "Accuracy : " + accuracy + "%";

             }

             else

             {

                 stop = setTimeout('timer()' , 1000);
  
        

             }



             if(time_left<=15)

             {

             	element.style.color='red';

             }

        } 



        function initialize()

        {

            // displaing the string

            //var text = get_string();

            //var text = "Fashion mostly refers to the style of clothing worn at a particular time clothing at its most basic is to keep us warm but it serves many other functions. It needs to fit the customs and norms of society. Clothing needs to be accepted as more or less 'normal'. It needs, for instance, to preserve decency.";

		    //var l = text.length;



		    var array = new Array();

		    array[0] = "page was first attracted to computers when he was six years old as he was able to play with the stuff lying around first generation personal computers that had been left by his parents he became the kid in his elementary school to turn in an assignment from a word processor his older brother also taught him to take things apart and before long he was taking everything in his house apart to see how it worked he said that from a very early age i also realized i wanted to invent things so i became really interested in technology and business";

		    array[1] = "fashion mostly refers to the style of clothing worn at a particular time clothing at its most basic is to keep us warm but it serves many other functions it needs to fit the customs and norms of society clothing needs to be accepted as more or less normal it needs for instance to preserve decency";

		    array[2] = "the bermuda triangle also known as the devils triangle is a loosely defined region in the western part of the north atlantic ocean where a number of aircraft and ships are said to have disappeared and the name is not recognized by the US Board on geographic names  he would review period newspapers of the dates of reported incidents and find reports on possibly relevant events like unusual weather that were never mentioned in the disappearance stories";

		    array[3] = "social media has come a long way in India and its penetration is growing rapidly  while there were 86 million social network users in india in 2013 this number is expected to touch 197 million active shop at many indian stores at one place and we aim to house designer brands from india in the forthcoming months the products that will be available at Ownow are relatively exclusive and plenty of each is imported for the entire country";

		    array[4] = "in this section you describe where you grew up what impact your family and community had on you your first and best friends your education and early work experiences this is not a resume type of listing  but focuses on the aha moments of insights ouch pain points to solve and inspirational messages from mentors and influencers many of these have a conscious or sub conscious impact on your attitudes values and behaviours and this section of the canvas helps you understand how you became who you are today";

		    array[5] = "this is also about indian business and thinking processes he adds pointing to the frameworks and case studies of jugaad and frugal innovation business writers in india will have the world reading them he believes that the only way to solve this is by helping women get online and sell home cooked food to consumers according to vinodh most of the women are unable to go out for employment because of various reasons this makes them financially dependent on their parents children and husband";

		    array[6] = "the venture plans to take off with its consumer marketplace in phases with the app to be launched this october the company is also planning to go global with its partnerships and has commenced work with but there has been a major shift in their consumption patterns as well as attitudes the silver surfers dont see the need to hoard savings anymore as the next generation does not want or need to depend on their wealth this leaves them free to spend all that money on their own comforts";

		    array[7] = "it was after completing a two year stint at sapient that the desire to start a start up grew even stronger even while at sapient she made sure that she had a know how of different things so she got down gone are the days when three generations of a family lived under the same roof with the elderly passing on the reins of the household as well as their special needs to their children with migration nuclear families are becoming the norm and the elderly are mostly left to fend for themselves";

		    

		    var flag=0;



		    while(flag!=1)

		    {

		    	var x = Math.floor((Math.random() * 10) + 1);

		    	if(x>=0 && x<=7)

		    	{

		    		flag=1;

		    	}

		    }



		    var text = array[x];



		    var to_display = "";



		    arr = text.split(" ");

		    var l = arr.length;

		    var count = 0;



		    while(l > 0)

		    {

		    	l=l-6;

		        for(var i=0 ; i<6;i++)

		           {

		               to_display +=  "<span id='"+count+"' class='untyped'; border-radius:10%'>" + arr[count++] + "</span> ";

		           }

		           to_display+="</br>";

		    }      

			var element = document.getElementById("display_space");

			element.innerHTML = '<p id ="display" style="text-align:center ; font-size:28 ; line-height:170%; font-family:Times New Roman"> ' + to_display +' </p>';



			var element = document.getElementById("time-elapsed"); 

            element.innerHTML = 60;



            $('input[type="text"], textarea').attr('readonly',false);

            document.getElementById('typing_space').value = "";



            check = 0;

            time_left = 60;

            arr_pointer = 0;

            correct = 0;

            incorrect = 0;

            n = 0;

            keystrokes = 0;

 

            var element = document.getElementById("time-elapsed");           

            element.style.color='green';



            clearTimeout(stop);



		 }



    // FOR CLEARING THE TEXT-AREA

 

    window.addEventListener("keydown", dealWithKeyboard, false);



    function dealWithKeyboard(e)

    {

    	if(e.keyCode == 32)

    	{

    		  if(time_left>0){

              var element = document.getElementById("typing_space");

              var word = element.value;

              keystrokes += word.length;

              keystrokes++;



              //  form the boundry for the current element

              var save1 = n+1;

              $('#'+save1).addClass('focus');

              $('#'+n).removeClass('focus');

              

              if(word.trim().localeCompare(arr[arr_pointer])==0)

              {

              	correct++;

                $('#'+n).removeClass('untyped').addClass('correct');

                n++;

              }

              else

              {

              	incorrect++;

                $('#'+n).removeClass('untyped').addClass('incorrect');

                n++;

              }

              element.value = "";



              if((arr_pointer+1)>6 && (arr_pointer+1)%6==0)

              {

              	scroll();

              }

              arr_pointer++;

          }

    	}

    }





    // function to scroll the display_space

    function scroll()

  	{

  		var current_pos = $("#display_space").scrollTop();

   	    $("#display_space").scrollTop(current_pos + 49);	

   	}

    



    // start the timer as soon as the user presses a charecter key

    var check = 0;

   	$('#typing_space').keypress(function (event){

   		if(event.keyCode!=32 && check!=1){

        check = 1;

        $('#0').addClass('focus');

      

        timer();

        $("#example-timer").circletimer("start");

    }

   	});





   	$(document).on("ready", function() {

        $("#example-timer").circletimer({

         // onComplete: function() {

           // alert("Time is up!");

          //},

          //onUpdate: function(elapsed) {

            //$("#time-elapsed").html(Math.round(elapsed));

          //},

          timeout: 60000    // 1 min timer

        });

    });



    $('#restart').click(function(){

          $("#example-timer").circletimer({

              // onUpdate: function(elapsed) {

            //$("#time-elapsed").html(Math.round(elapsed));

          //},

          timeout: 60000    // 1 min timer

    }); 

    });



    document.getElementById("example-timer").style.color = "red";



    function switch_buttons()

    {

    	document.getElementById("button_replace").innerHTML = '<center><button onclick="register_user()" type="button" onclick="authenticate_user()" class="btn btn-success" style="">Register and  continue</button></center>';

    }



</script>



</body>       

</html>