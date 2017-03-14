@extends('default')

@section('title')
  Mazzika
@endsection

@section('content')   
   

    
           
    <form class="col-lg-6" method="post" action="traitement">
    
    <label for="genre">Top 50 des morceaux par pays :</label><br/>
    <select name="pays">
	<option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia+and+Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Brazil">Brazil</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina+Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cayman+Islands">Cayman Islands</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Colombia">Colombia</option>
    <option value="Costa+Rica">Costa Rica</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech+Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican+Republic">Dominican Republic</option>
    <option value="Egypt">Egypt</option>
    <option value="El+Salvador">El Salvador</option>
    <option value="Equatorial+Guinea">Equatorial Guinea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Faroe+Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France" selected>France</option>
    <option value="French+Guiana">French Guiana</option>
    <option value="French+Polynesia">French Polynesia</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guernsey">Guernsey</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea+Bissau">Guinea-Bissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong+Kong">Hong Kong</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jersey">Jersey</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Latvia">Latvia</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Lesotho">Lesotho</option>
	<option value="Liberia">Liberia</option>
	<option value="Libya">Libya</option>
	<option value="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania">Lithuania</option>
	<option value="Luxembourg">Luxembourg</option>
	<option value="Macao">Macao</option>
	<option value="Macedonia">Macedonia</option>
	<option value="Madagascar">Madagascar</option>
	<option value="Malawi">Malawi</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives">Maldives</option>
	<option value="Mali">Mali</option>
	<option value="Malta">Malta</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritania">Mauritania</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mayotte">Mayotte</option>
	<option value="Mexico">Mexico</option>
	<option value="Moldova">Moldova</option>
	<option value="Monaco">Monaco</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montenegro">Montenegro</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Namibia">Namibia</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="New+Caledonia">New Caledonia</option>
	<option value="New+Zealand">New Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Paraguay">Panama</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philippines">Philippines</option>
	<option value="Pitcairn">Pitcairn</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto+Rico">Puerto Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Romania">Romania</option>
	<option value="Russian+Federation">Russian Federation</option>
	<option value="Rwanda">Rwanda</option>
	<option value="Samoa">Samoa</option>
	<option value="San+Marino">San Marino</option>
	<option value="Saudi+Arabia">Saudi Arabia</option>
	<option value="Senegal">Senegal</option>
	<option value="Serbia">Serbia</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Sierra+Leone">Sierra Leone</option>
	<option value="Singapore">Singapore</option>
	<option value="Slovakia">Slovakia</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon+Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South+Africa">South Africa</option>
	<option value="Spain">Spain</option>
	<option value="Sri+Lanka">Sri Lanka</option>
	<option value="Suriname">Suriname</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syrian+Arab+Republic">Syrian Arab Republic</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania">Tanzania</option>
	<option value="Thailand">Thailand</option>
	<option value="Togo">Togo</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad+and+Tobago">Trinidad and Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Uganda">Uganda</option>
	<option value="Ukraine">Ukraine</option>
	<option value="United+Arab+Emirates">United Arab Emirates</option>
	<option value="United+Kingdom">United Kingdom</option>
	<option value="United+States">United States</option>
	<option value="Uruguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Viet+Nam">Viet Nam</option>
	<option value="Yemen">Yemen</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>
</select>  
    <input type="hidden" name="_token" value="{{ csrf_token() }}">   
    <label >&nbsp; </label> <button id="deconnexion1" name="envoyer" >ok</button>
        
</form>  
          

<form method="post" action="traitementtrack" class="col-lg-6">

       <label for="genre">Les meilleurs morceaux par genre :</label><br />

       <select name="genre" id="genre">

           <option value="rock">rock</option>

           <option value="electronic">electronic</option>

           <option value="seen+live">seen live</option>

           <option value="alternative">alternative</option>

           <option value="indie">indie</option>

           <option value="pop">pop</option>

           <option value="female+vocalists">female vocalists</option>

           <option value="metal">metal</option>
           
           <option value="alternative+rock">alternative rock</option> 
           
           <option value="classic+rock">classic rock</option>
           
           <option value="jazz">jazz</option>
           
          <option value="ambient">ambient</option>
          
           <option value="experimental">experimental</option> 
           
           <option value="folk">folk</option>
           
           <option value="indie+rock">indie rock</option>
           
          <option value="punk">punk</option>

           <option value="hard+rock">hard rock</option>

           <option value="Hip-Hop">Hip-Hop</option>

           <option value="instrumental">instrumental</option>

           <option value="singer-songwriter">singer-songwriter</option>

           <option value="black+metal">black metal</option>

           <option value="dance">dance</option>

           <option value="80s">80s</option>
           
           <option value="Progressive+rock">Progressive rock</option> 
           
           <option value="death+metal">death metal</option>
           
           <option value="british">british</option>
           
          <option value="hardcore">hardcore</option>
          
           <option value="heavy+metal">heavy metal</option> 
           
           <option value="soul">soul</option>
           
           <option value="chillout">chillout</option>

          <option value="electronica">electronica</option>

           <option value="Classical">Classical</option>

           <option value="industrial">industrial</option>

           <option value="blues">blues</option>

           <option value="Soundtrack">Soundtrack</option>

           <option value="punk+rock">punk rock</option>

           <option value="rap">rap</option>

           <option value="thrash+metal">thrash metal</option>
           
           <option value="acoustic">acoustic</option> 
           
           <option value="psychedelic">psychedelic</option>
           
           <option value="90s">90s</option>
           
          <option value="metalcore">metalcore</option>
          
           <option value="japanese">japanese</option> 
           
           <option value="post-rock">post-rock</option>
           
           <option value="german">german</option>
           
           <option value="Progressive+metal">Progressive metal</option>
           
          <option value="new+wave">new wave</option>
          
           <option value="funk">funk</option> 
           
           <option value="piano">piano</option>
           
           <option value="hip+hop">hip hop</option>
           
       </select>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">   
    <label >&nbsp; </label> <button id="deconnexion1" name="envoyer" >ok</button>

</form>          
<h1>Top 12 de la semaine en France :</h1>
          
           @foreach ($top10->tracks->track as $key => $m)    
            <div class=" centrer col-lg-4 col-md-6 col-sm-12">
               <div  class="boite">
                <a href="{{$m->url}}">
                Titre : {{$m->name}}</a> <br>
                Artiste : {{$m->artist->name}}<br>
                Nombre d'écoutes : {{$m->listeners}}<br><br>

                <img src='{{$m->image[2]->{"#text"} }}'><br><br>
                <a href="#"><i class="fa fa-thumbs-up" id="pouce" aria-hidden="true"></i></a>
                </div>
                <br>
               
            </div>
        
    @endforeach

  
@endsection