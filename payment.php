<html>
    <head><title>Secure Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
           @media screen and (max-width:600px) 
        {  
            #div1{
                min-width: 100%;
                margin: 0px;
            }
            #leftmainframe{
                min-width: 100%;    
            }
            #rightmainframe{  
                min-width: 100%;
            }
        }  
        body{
            background-color: rgb(52, 52, 85);
        }
        #div1{
            width: 60%;
            border: 0px solid white;
            margin: auto;
            margin-top: 10%;
            overflow: hidden;
        }
        .mainframe{
            float: left;
            background-color: white;
        }
        #leftmainframe{
            height: 60%;
            width: 250px;
            background-color: grey;
            border-top: 2px solid black;
        }
        #rightmainframe{
            height: 60%;
            width: 63%;
            overflow: hidden;
            border-top: 2px solid black;
        }
        .method{
            border: 0px solid black;
            width: 90%;
            margin: auto;
            margin-top: 5%;
        }
        #heading1{
            font-size: 25px;
            font-family: Arial;
            text-align: center;
            margin-top: 5%;
            margin-bottom: 20%;
            color: white;
        }
        .button{
            width: 100%;
            font-size: 18px;
            text-align: center;
            font-family: Arial;
            margin: 0%;
            padding: 10px;
            border-radius: 10px;
            font-weight: bold;
            border: 0px;
            transition: all .3s ease-in-out;

        }
        .button:hover{
            background-color:rgb(52, 52, 85);
            color: #0ef;
        }
        .heading2{
            font-size: 25px;
            font-family: Arial;
            padding: 30px 10px;
            background-color: grey;
            text-align: center;
            margin-top: 0px;
            color: white;
            margin-bottom: 0px;
            border: 0px solid black;
            
            
        }
        #div7{
            border: 0px solid black;
            width: 80%;

            overflow: hidden;
            margin: auto;
            padding-top: 20px;
        }
        .label1{
            font-size: 18px;
            font-family: Arial;
            font-weight: bold;
        }
        #div8{
            border: 0px solid black;
            width: 80%;
            margin-bottom: 5%;
        }
        .input{
            width: 100%;
            height: 35px;
            border-radius: 10px;
            padding: 5px 15px;
            font-family: Arial;
            font-size: 18px;

        }
        #div9,#div10{
            float: left;
            width: 25%;
            border: 0px solid black;;
        }
        #div10{
            margin-left: 20%;
        }
        #div11{
            width: 80%;
            border: 0px solid black;
            margin-top: 25%;
        }
        #b5{
            margin-top: 10%;
        }
        #div13{
            width: 50%;
            margin-left: 10%;
            margin-top: 5%;
        }
        #div14{
            width: 50%;
            margin-left: 10%;
            margin-top: 5%;
        }
        #b6{
            width: 80%;
            margin-left: 10%;
            margin-top: 5%;
        }
        #div16{
            width: 60%;
            margin-left: 10%;
            margin-top: 5%;
        }
        #div17{
            width: 20%;
            margin-left: 5%;
            margin-top: 5%;
            padding-top: 17px;
        }
        #div16,#div17{
            float: left;
        }
        #b7{
            width: 80%;
            margin-left: 10%;
            margin-top: 10%;
        }
        #div19{
            width: 50%;
            margin-left: 10%;
            margin-top: 5%;
        }
        #div20{
            width: 30%;
            margin-left: 5%;
            margin-top: 5%;
            padding-top: 17px;
        }
        #div19,#div20{
            float: left;
        }
        #b9{
            width: 80%;
            margin-top: 5%;
            margin-left: 10%;
        }
        #div21{
            border: 0px solid black;
            width: 50%;
            margin-left: 10%;
            margin-top: 0%;
        }
        #id1{
            text-align: justify;
            margin: 80px 60px 0 10px;
            padding: 80px 60px;
            border: 2px solid rgb(52, 52, 85);
        }
        .greet{
            width: 20%;
            margin: 5% 40%;
            color: black;
            background-color: rosybrown;
            border: 2px solid black;
        } 
    </style>
    </head>
<body>
        <div id="div1">
            <div id="leftmainframe" class="mainframe">
                <div id="div2" class="method">
                    <h1 id="heading1">Select Secure Payment Method</h1>
                </div>
                <div id="div3" class="method"><button id="b1" class="button" onclick="card_details()">Debit card / Credit Card</button></div>
                <div id="div4" class="method"><button id="b2" class="button" onclick="internet_banking()">Internet Banking</button></div>
                <div id="div5" class="method"><button id="b3" class="button" onclick="upi()">BHIM UPI</button></div>
                <div id="div6" class="method"><button id="b4" class="button" onclick="e_wallet()">E - Wallet</button></div>

            </div>
            <div id="rightmainframe" class="mainframe">
                <div id="remove">
                    <h2 id="id1">Kindly, use this payment gateway for purchase our products.</h2>
                </div>
            </div>
            <br>

        </div>  
        <input type="button" class="greet button" value="Done"onclick="greet();"/>
        <script>
            function greet(){
                alert("Thanks for visiting our site.")
            }
            function card_details()
            {
                document.getElementById("remove").remove();

                var remove=document.createElement("div");
                remove.setAttribute("id","remove");
                document.getElementById("rightmainframe").appendChild(remove);

                var element2=document.createElement("h6");
                element2.textContent="Enter Your Card Details :";
                var element3=document.createElement("div");

                var remove=document.getElementById("remove");
                remove.append(element2,element3);

                element2.setAttribute("class","heading2");
                element3.setAttribute("id","div7");

                var form=document.createElement("form");
                var element4=document.createElement("span");
                element4.textContent="Card Number"
                var element5=document.createElement("div");
                var element6=document.createElement("input");
                var element7=document.createElement("span");
                element7.textContent="Expiry"
                var element8=document.createElement("div");
                var element9=document.createElement("input");
                var element10=document.createElement("span");
                element10.textContent="CVV"
                var element11=document.createElement("div");
                var element12=document.createElement("input");
                var element13=document.createElement("span");
                element13.textContent="Card Holder Name"
                var element14=document.createElement("div");
                var element15=document.createElement("input");
                var element16=document.createElement("input");
                
                element3.appendChild(form);
                element5.append(element4,element6);
                element8.append(element7,element9);
                element11.append(element10,element12);
                element14.append(element13,element15);
                element4.setAttribute("class","label1");
                element7.setAttribute("class","label1");
                element10.setAttribute("class","label1");
                element13.setAttribute("class","label1");

                element5.setAttribute("id","div8");
                element8.setAttribute("id","div9");
                element11.setAttribute("id","div10");
                element14.setAttribute("id","div11");

                var num_a_list=["id","input1","class","input","type","text","name","card_number","placeholder","Card Number"];
                for(i=0;i<num_a_list.length;i=i+2)
                {
                    element6.setAttribute(num_a_list[i],num_a_list[i+1]);

                }
                var expiry_a_list=["id","input2","class","input","type","text","name","expiry","placeholder","MM/YY"];
                for(i=0;i<expiry_a_list.length;i=i+2)
                {
                    element9.setAttribute(expiry_a_list[i],expiry_a_list[i+1]);

                }
                var cvv_a_list=["id","input3","class","input","type","text","name","cvv","placeholder","CVV"];
                for(i=0;i<cvv_a_list.length;i=i+2)
                {
                    element12.setAttribute(cvv_a_list[i],cvv_a_list[i+1]);

                }
                var name_a_list=["id","input4","class","input","type","text","name","hldrname","placeholder","Card Holder Name"];
                for(i=0;i<name_a_list.length;i=i+2)
                {
                    element15.setAttribute(name_a_list[i],name_a_list[i+1]);

                }

                var pay_a_list=["id","b5","class","button","type","submit","value","Pay Now"];
                for(i=0;i<pay_a_list.length;i=i+2)
                {
                    element16.setAttribute(pay_a_list[i],pay_a_list[i+1]);

                }
                
                form.append(element5,element8,element11,element14,element16);
            }
                
            function internet_banking()
            {
                document.getElementById("remove").remove();

                var remove=document.createElement("div");
                remove.setAttribute("id","remove");
                document.getElementById("rightmainframe").appendChild(remove);

                var element1=document.createElement("h6");
                element1.textContent="Enter Internet Banking  Details :";
                var element2=document.createElement("div");
                element2.setAttribute("id","div12");
                element1.setAttribute("class","heading2");

                var remove=document.getElementById("remove");
                remove.append(element1,element2);

                var element3=document.createElement("form");
                var element4=document.createElement("div");
                var element5=document.createElement("span");
                element5.textContent="Banking Id";
                var element6=document.createElement("input");

                var element7=document.createElement("div");
                var element8=document.createElement("span");
                element8.textContent="Password";
                var element9=document.createElement("input");

                var element10=document.createElement("input")
                
                element4.setAttribute("id","div13");
                element7.setAttribute("id","div14");
                element5.setAttribute("class","label1");
                element8.setAttribute("class","label1");
                
                element4.append(element5,element6);
                element7.append(element8,element9);
                element3.append(element4,element7,element10);
                element2.appendChild(element3);

                var id_a_list=["id","input1","class","input","type","text","name","b_id","placeholder","1100245856"];
                for(i=0;i<id_a_list.length;i=i+2)
                {
                    element6.setAttribute(id_a_list[i],id_a_list[i+1]);

                }
                
                var pass_a_list=["id","input2","class","input","type","password","name","password","placeholder","Password"];
                for(i=0;i<pass_a_list.length;i=i+2)
                {
                    element9.setAttribute(pass_a_list[i],pass_a_list[i+1]);

                }

                var b_a_list=["id","b6","class","button","type","submit","value","Pay Now"];
                for(i=0;i<b_a_list.length;i=i+2)
                {
                    element10.setAttribute(b_a_list[i],b_a_list[i+1]);

                }

                
            }

            function upi()
            {
                document.getElementById("remove").remove();

                var remove=document.createElement("div");
                remove.setAttribute("id","remove");
                document.getElementById("rightmainframe").appendChild(remove);

                var element1=document.createElement("h6");
                element1.textContent="Enter UPI  Details :";
                var element2=document.createElement("div");
                element2.setAttribute("id","div15");
                element1.setAttribute("class","heading2");

                var remove=document.getElementById("remove");
                remove.append(element1,element2);

                var element3=document.createElement("form");
                var element4=document.createElement("div");
                var element5=document.createElement("span");
                element5.textContent="UPI Id";
                var element6=document.createElement("input");

                var element7=document.createElement("div");
                var element8=document.createElement("button");
                element8.textContent="Verify"
                element9=document.createElement("input")
                
                element4.setAttribute("id","div16");
                element7.setAttribute("id","div17");
                element5.setAttribute("class","label1");
                element8.setAttribute("class","button")
                
                element4.append(element5,element6);
                element7.appendChild(element8);
                element3.append(element4,element7,element9);
                element2.appendChild(element3);

                var upi_a_list=["id","input1","class","input","type","text","name","upi_id","placeholder","7217699545@paytm"];
                for(i=0;i<upi_a_list.length;i=i+2)
                {
                    element6.setAttribute(upi_a_list[i],upi_a_list[i+1]);

                }
                
                var b_a_list=["id","b7","class","button","type","submit","value","Pay Now"];
                for(i=0;i<b_a_list.length;i=i+2)
                {
                    element9.setAttribute(b_a_list[i],b_a_list[i+1]);

                }

                
            }

            function e_wallet()
            {
                document.getElementById("remove").remove();

                var remove=document.createElement("div");
                remove.setAttribute("id","remove");
                document.getElementById("rightmainframe").appendChild(remove);

                var element1=document.createElement("h6");
                element1.textContent="Enter E Wallet  Details :";
                var element2=document.createElement("div");
                element2.setAttribute("id","div18");
                element1.setAttribute("class","heading2");

                var remove=document.getElementById("remove");
                remove.append(element1,element2);

                var element3=document.createElement("form");
                var element4=document.createElement("div");
                var element5=document.createElement("span");
                element5.textContent="Wallet No.";
                var element6=document.createElement("input");

                var element7=document.createElement("div");
                var element8=document.createElement("button");
                element8.textContent="Genrate OTP";

                element11=document.createElement("div");
                element12=document.createElement("span");
                element12.textContent="OTP"
                element9=document.createElement("input");
                element10=document.createElement("input");
                
                
                element4.setAttribute("id","div19");
                element7.setAttribute("id","div20");
                element11.setAttribute("id","div21");
                element5.setAttribute("class","label1");
                element12.setAttribute("class","label1")
                element8.setAttribute("class","button");
                
                element4.append(element5,element6);
                element7.appendChild(element8);
                element11.append(element12,element9)
                element3.append(element4,element7,element11,element10);
                element2.appendChild(element3);

                var w_a_list=["id","input1","class","input","type","text","name","w_number","placeholder","7217699545"];
                for(i=0;i<w_a_list.length;i=i+2)
                {
                    element6.setAttribute(w_a_list[i],w_a_list[i+1]);

                }
                var otp_a_list=["id","input2","class","input","type","text","name","otp","placeholder","000000"];
                for(i=0;i<otp_a_list.length;i=i+2)
                {
                    element9.setAttribute(otp_a_list[i],otp_a_list[i+1]);

                }
                
                var b_a_list=["id","b9","class","button","type","submit","value","Pay Now"];
                for(i=0;i<b_a_list.length;i=i+2)
                {
                    element10.setAttribute(b_a_list[i],b_a_list[i+1]);

                }

                
            }

            
        </script>
</body>
</html>