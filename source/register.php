<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>register step1</title>
<link rel="stylesheet" href="main.css" type="text/css" />
<style type="text/css">
#apDiv7 {
	position: absolute;
	left: 311px;
	top: 287px;
	width: 739px;
	height: 558px;
	z-index: 6;
	color: seashell;
	font-size: 18px;
}
#apDiv7 #registerform fieldset table tr td pre {
	font-size: 18px;
}
#apDiv7 #registerform fieldset table tr td label {
	font-size: 18px;
}
#apDiv7 #registerform fieldset table tr td a {
	font-size: 14px;
}
#apDiv7 #registerform fieldset table tr td {
	font-size: 16px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
#apDiv7 #registerform fieldset table tr td a {
	font-size: 14px;
	color: seashell;
}
#apDiv7 #registerform fieldset table tr td a:hover {
	font-size: 14px;
	color: #7F99FF;
}
#apDiv7 #registerform fieldset h2 {
	font-size: 20px;
	font-weight: 100;
	text-transform: capitalize;
}
#apDiv4 {
	position: absolute;
	left: 343px;
	top: 216px;
	width: 673px;
	height: 31px;
	z-index: 7;
	color: seashell;
	font-size: 16px;
}
#apDiv4 h2 {
	font-weight: 100;
	text-align: center;
	font-size: 22px
}
#apDiv7 #registerform p {
	font-size: 24;
}
#apDiv7 #registerform table tr td {
	font-size: 20px;
	font-weight: lighter;
}
</style>
<script src="register.js" type="text/javascript"></script>
</head>

<body>
<div id="apDiv1"></div>


<div id="apDiv7">
  <form id="registerform" method="post" name="registerform" action="registerform1.php">
    <fieldset>
      <legend>
      <h2>Personal details</h2>
      </legend>
      <table width="100%" height="251" align="center" cellpadding="5" cellspacing="15">
        <tr>
          <td align="right"><label title="This field is required">Full name * : </label></td>
          <td><input type="text" pattern="[A-Za-z\s]{3,30}"  title="3 characters minimum, numbers are not aloud" id="firstname" name="firstname" size="15" required="required"  class="formfield" placeholder="First name" />
            &nbsp;
            <input type="text" pattern="[A-Za-z\s]{3,30}" title="3 characters minimum, numbers are not aloud" id="middlename" name="middlename" size="15" required="required"  class="formfield" placeholder="Middle name"/>
            &nbsp;
            <input type="text" pattern="[A-Za-z\s]{3,30}" title="3 characters minimum, numbers are not aloud" id="lastname" name="lastname" size="15" required="required" class="formfield" placeholder="Last name"/></td>
        </tr>
        <tr>
          <td align="right"><label title="This field is required">Gender * : </label></td>
          <td><input type="radio" id="male" name="gender" required="required" title="Gender" value="male"/>
            Male&nbsp;
            <input type="radio" id="female" name="gender" required="required" title="Gender" value="female" />
            Female </td>
        </tr>
        <tr>
          <td align="right"><label title="This field is required">Date Of Birth * : </label></td>
          <td><input type="date" id="bday" name="birthdate" required="required" title="Birthdate" class="formfield3" /></td>
        </tr>
        <tr>
          <td align="right"><label title="This field is required">State * : </label></td>
          <td><select id="state" name="state" required="required" title="state" class="formfield3"/>
            
            <option value=> - - select - - </option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
            <option value="Daman and Diu">Daman and Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Orissa">Orissa</option>
            <option value="Pondicherry">Pondicherry</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttaranchal">Uttaranchal</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="West Bengal">West Bengal</option>
            <option id="other" value="0"> - - other - - </option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="statespecify" name="statespecify" size="30" placeholder="specify" class="formfield3"/></td>
        </tr>
        <tr>
          <td align="right"><label title="This field is required">City * : </label></td>
          <td><select id="city" name="city" required="required" title="city" class="formfield3"/>
            
            <option value=> - - select - - </option>
            <option value="Adoni">Adoni</option>
            <option value="Agartala">Agartala</option>
            <option value="Agra">Agra</option>
            <option value="Ahmadnagar">Ahmadnagar</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Ajmer">Ajmer</option>
            <option value="Akola">Akola</option>
            <option value="Akot">Akot</option>
            <option value="Alibag">Alibag</option>
            <option value="Aligarh">Aligarh</option>
            <option value="Allahabad">Allahabad</option>
            <option value="Alleppey">Alleppey</option>
            <option value="Almora">Almora</option>
            <option value="Amravati">Amravati</option>
            <option value="Amritsar">Amritsar</option>
            <option value="Anand">Anand</option>
            <option value="Anantapur">Anantapur</option>
            <option value="Ankapalli">Ankapalli</option>
            <option value="Asansol">Asansol</option>
            <option value="Aurangabad">Aurangabad</option>
            <option value="Azamgarh">Azamgarh</option>
            <option value="Ballarpur">Ballarpur</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Bangalore Rural">Bangalore Rural</option>
            <option value="Bangaloru">Bangaloru</option>
            <option value="Banswara">Banswara</option>
            <option value="Bareilly">Bareilly</option>
            <option value="Baroda">Baroda</option>
            <option value="Barshi">Barshi</option>
            <option value="Basti">Basti</option>
            <option value="Bathinda">Bathinda</option>
            <option value="Belgaum">Belgaum</option>
            <option value="Bellary">Bellary</option>
            <option value="Bhabanipatna">Bhabanipatna</option>
            <option value="Bhatinda">Bhatinda</option>
            <option value="Bhavnagar">Bhavnagar</option>
            <option value="Bhilwara">Bhilwara</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Bhubaneswar">Bhubaneswar</option>
            <option value="Bhuj">Bhuj</option>
            <option value="Bidar">Bidar</option>
            <option value="Bikaner">Bikaner</option>
            <option value="Bissau">Bissau</option>
            <option value="Boisar">Boisar</option>
            <option value="Bokaro Steel City">Bokaro Steel City</option>
            <option value="Budaun">Budaun</option>
            <option value="Burdwan">Burdwan</option>
            <option value="Calcutta (Bolpur)">Calcutta (Bolpur)</option>
            <option value="Calicut">Calicut</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chandrapur">Chandrapur</option>
            <option value="Chennai">Chennai</option>
            <option value="Chhindwara">Chhindwara</option>
            <option value="Chopda">Chopda</option>
            <option value="Coimbatore">Coimbatore</option>
            <option value="Cuddalore">Cuddalore</option>
            <option value="Cuttack">Cuttack</option>
            <option value="Darbhanga">Darbhanga</option>
            <option value="Davangere">Davangere</option>
            <option value="Dehradun">Dehradun</option>
            <option value="Delhi">Delhi</option>
            <option value="Dhanbad">Dhanbad</option>
            <option value="Dharwad">Dharwad</option>
            <option value="Durg">Durg</option>
            <option value="Durgapur">Durgapur</option>
            <option value="Ernakulam">Ernakulam</option>
            <option value="Erode">Erode</option>
            <option value="Faridabad">Faridabad</option>
            <option value="Gandhinagar">Gandhinagar</option>
            <option value="Ghaziabad">Ghaziabad</option>
            <option value="Goa">Goa</option>
            <option value="Gulbarga">Gulbarga</option>
            <option value="Guntur">Guntur</option>
            <option value="Gurgaon">Gurgaon</option>
            <option value="Guru Har Sahai">Guru Har Sahai</option>
            <option value="Guwahati">Guwahati</option>
            <option value="Haldia">Haldia</option>
            <option value="Haldwani">Haldwani</option>
            <option value="Hazaribagh">Hazaribagh</option>
            <option value="Hosur">Hosur</option>
            <option value="Hubli">Hubli</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Imphal">Imphal</option>
            <option value="Indore">Indore</option>
            <option value="Jabalpur">Jabalpur</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Jalandhar">Jalandhar</option>
            <option value="Jalgaon">Jalgaon</option>
            <option value="Jammu">Jammu</option>
            <option value="Jamnagar">Jamnagar</option>
            <option value="Jamshedpur">Jamshedpur</option>
            <option value="Jaunpur">Jaunpur</option>
            <option value="Jhansi">Jhansi</option>
            <option value="Jhunjhunu">Jhunjhunu</option>
            <option value="Jodhpur">Jodhpur</option>
            <option value="Junagadh">Junagadh</option>
            <option value="Kadapa">Kadapa</option>
            <option value="Kadi">Kadi</option>
            <option value="Kalol">Kalol</option>
            <option value="Kancheepuram">Kancheepuram</option>
            <option value="Kannur">Kannur</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Kapurthala">Kapurthala</option>
            <option value="Karimnagar">Karimnagar</option>
            <option value="Karnal">Karnal</option>
            <option value="Kashiipur">Kashiipur</option>
            <option value="Kendrapada">Kendrapada</option>
            <option value="Khalilabad">Khalilabad</option>
            <option value="Khanna">Khanna</option>
            <option value="Khopoli">Khopoli</option>
            <option value="Kochi">Kochi</option>
            <option value="Kolhapur">Kolhapur</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Kollam">Kollam</option>
            <option value="Kondagaon">Kondagaon</option>
            <option value="Kopargaon">Kopargaon</option>
            <option value="Korba">Korba</option>
            <option value="Kota">Kota</option>
            <option value="Kottayam">Kottayam</option>
            <option value="Kucknow">Kucknow</option>
            <option value="Kudal">Kudal</option>
            <option value="Kurnool">Kurnool</option>
            <option value="Kurukshera">Kurukshera</option>
            <option value="Lakhimpur Kheri">Lakhimpur Kheri</option>
            <option value="Lakhisarai">Lakhisarai</option>
            <option value="Latur">Latur</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Ludhiana">Ludhiana</option>
            <option value="Madurai">Madurai</option>
            <option value="Maharastra">Maharastra</option>
            <option value="Mahuva">Mahuva</option>
            <option value="Malkapur">Malkapur</option>
            <option value="Malout">Malout</option>
            <option value="Mangalore">Mangalore</option>
            <option value="Mangrulnath">Mangrulnath</option>
            <option value="Manipal">Manipal</option>
            <option value="Mapusa">Mapusa</option>
            <option value="Meerut">Meerut</option>
            <option value="Mehsana">Mehsana</option>
            <option value="Mhow">Mhow</option>
            <option value="Moga">Moga</option>
            <option value="Moradabad">Moradabad</option>
            <option value="Motihari">Motihari</option>
            <option value="Mubai">Mubai</option>
            <option value="Mukerian Punjab">Mukerian Punjab</option>
            <option value="Mumai">Mumai</option>
            <option value="Mumba">Mumba</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Nainpur">Nainpur</option>
            <option value="Nalgonda">Nalgonda</option>
            <option value="Namakkal">Namakkal</option>
            <option value="Nasik">Nasik</option>
            <option value="Navi Mumbai">Navi Mumbai</option>
            <option value="Nawada,Bihar">Nawada,Bihar</option>
            <option value="New Delhi">New Delhi</option>
            <option value="Noida">Noida</option>
            <option value="Palanpur">Palanpur</option>
            <option value="Pali-Marwar">Pali-Marwar</option>
            <option value="Panaji">Panaji</option>
            <option value="Panipat">Panipat</option>
            <option value="Panjim">Panjim</option>
            <option value="Panvel">Panvel</option>
            <option value="Parbhani">Parbhani</option>
            <option value="Pathankot">Pathankot</option>
            <option value="Patiala">Patiala</option>
            <option value="Patna">Patna</option>
            <option value="Ponda">Ponda</option>
            <option value="Port Blair">Port Blair</option>
            <option value="Pune">Pune</option>
            <option value="Purnea">Purnea</option>
            <option value="Rae Bareli">Rae Bareli</option>
            <option value="Raichur">Raichur</option>
            <option value="Raipur">Raipur</option>
            <option value="Rajahmundry">Rajahmundry</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Ranchi">Ranchi</option>
            <option value="Renukoot">Renukoot</option>
            <option value="Rudrapur">Rudrapur</option>
            <option value="Saharanpur">Saharanpur</option>
            <option value="Salem">Salem</option>
            <option value="Sangameshwar">Sangameshwar</option>
            <option value="Satara">Satara</option>
            <option value="Sathyamangalam">Sathyamangalam</option>
            <option value="Secunderabad">Secunderabad</option>
            <option value="Shajapur">Shajapur</option>
            <option value="Shimla">Shimla</option>
            <option value="Singrauli">Singrauli</option>
            <option value="Sitapur">Sitapur</option>
            <option value="Siwan">Siwan</option>
            <option value="Solapur">Solapur</option>
            <option value="Srinagar">Srinagar</option>
            <option value="Surat">Surat</option>
            <option value="Tezpur">Tezpur</option>
            <option value="Thane">Thane</option>
            <option value="Thiruchy">Thiruchy</option>
            <option value="Tirunelveli">Tirunelveli</option>
            <option value="Tirupati">Tirupati</option>
            <option value="Tiruvarur">Tiruvarur</option>
            <option value="Tonk">Tonk</option>
            <option value="Trichy">Trichy</option>
            <option value="Trivandrum">Trivandrum</option>
            <option value="Tuni">Tuni</option>
            <option value="Udaipur">Udaipur</option>
            <option value="Una">Una</option>
            <option value="Vadodara">Vadodara</option>
            <option value="Vairengte">Vairengte</option>
            <option value="Vapi">Vapi</option>
            <option value="Varanasi">Varanasi</option>
            <option value="Vellore">Vellore</option>
            <option value="Vijayawada">Vijayawada</option>
            <option value="Villlupuram">Villlupuram</option>
            <option value="Visakhapatnam">Visakhapatnam</option>
            <option value="Vizag">Vizag</option>
            <option value="Warangal">Warangal</option>
            <option value="Wellington">Wellington</option>
            <option value="Yavatmal">Yavatmal</option>
            <option id="other" value="0"> - - other - - </option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="cityspecify" name="cityspecify" size="30" placeholder="specify" class="formfield3"/></td>
        </tr>
      </table>
    </fieldset>
    <table width="100%" cellpadding="5" cellspacing="15">
      <tr>
        <td align="center" valign="top"><input type="image" id="registersubmit1" name="registersubmit1" src="images/arrow-left.png" onclick="location='login.php'" title="previous"/>
          &nbsp;&nbsp;Step 1&nbsp;&nbsp;
          <input type="image" id="registersubmit2" name="registersubmit2" src="images/arrow-right.png"  title="next" /></td>
      </tr>
    </table>
  </form>
</div>
<div id="apDiv4">
  <h2>Step 1 : Your Personal Details</h2>
</div>
</body>
</html>
