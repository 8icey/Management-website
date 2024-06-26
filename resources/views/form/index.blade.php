<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire demande et derangement </title>
    <link rel="icon" type="image/png" href="IMAGES/logoalg.png">
    <style>
        .dr{
            margin-left: 2cm;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #06238e;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #2746cd;
        }
        textarea{
            width: 100%;
            padding: 10px;
            padding-bottom: 2cm;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: none;

        }
    </style>
</head>
<body>
    @if(session('successdm'))
    <div class="alert alert-success">
        {{ session('successdm') }}
    </div>
    @endif

   
    @if(session('errordm'))
    <div class="alert alert-danger">
        {{ session('errordm') }}
    </div>
    @endif
    @if(session('successdr'))
    <div class="alert alert-success">
        {{ session('successdr') }}
    </div>
    @endif

   
    @if(session('errordr'))
    <div class="alert alert-danger">
        {{ session('errordr') }}
    </div>
    @endif

    <div>
        @if($errors->any())
        <ul>
@foreach($errors->all() as $error)
<li>
    {{$error}}
</li>
@endforeach
@endif
        </ul>
    </div> 
    
    <div class="container">
        
        <div class="dm">
            <h2>Formulaire Demande</h2>
        <!-- Client Type Selector -->
        <label for="Type_client">Type of Client</label>
        <select id="Type_client">
            <option value="Personal">Personal</option>
            <option value="Business">Business</option>
            <option value="Reseller">Reseller</option>
        </select>
            <!-- Form for Personal Client -->
            <form id="personal_form" action="{{route('form.submitdemande')}}" method="post" style="display: block;">
                @csrf
                @method('post')
                <input type="hidden" name="Type_client" value="Personal">
                <label for="Type_demande_personal">Subscribe to</label>
                <select name="Type_demande" id="Type_demande_personal">
                    <option value="Idoom Fixe offer">Idoom Fixe offer</option>
                    <option value="Idoom ADSL offer">Idoom ADSL offer</option>
                    <option value="Idoom Fibre offer">Idoom Fibre offer</option>
                    <option value="Idoom 4G LTE offer">Idoom 4G LTE offer</option>
                </select>
                <label for="Nom_client_personal">Last Name/Company Name</label>
                <input type="text" name="Nom_client" id="Nom_client_personal">
                <label for="Prenom_client_personal">First Name</label>
                <input type="text" name="Prenom_client" id="Prenom_client_personal">
                <label for="Birthday_date_personal">Birthday Date</label>
                <input type="date" name="Birthday_date" id="Birthday_date_personal">
                <label for="Fixe_personal">Landline Number</label>
                <input type="text" name="Fixe" id="Fixe_personal">
                <label for="Wilaya_client_personal">Wilaya</label>
                <select name="Wilaya_client" id="Wilaya_client_personal">
                    <option value="">--Select Wilaya--</option>
                    <option value="Adrar">Adrar</option>
    <option value="Chlef">Chlef</option>
    <option value="Laghouat">Laghouat</option>
    <option value="Oum El Bouaghi">Oum El Bouaghi</option>
    <option value="Batna">Batna</option>
    <option value="Béjaïa">Béjaïa</option>
    <option value="Biskra">Biskra</option>
    <option value="Béchar">Béchar</option>
    <option value="Blida">Blida</option>
    <option value="Bouira">Bouira</option>
    <option value="Tamanrasset">Tamanrasset</option>
    <option value="Tébessa">Tébessa</option>
    <option value="Tlemcen">Tlemcen</option>
    <option value="Tiaret">Tiaret</option>
    <option value="Tizi Ouzou">Tizi Ouzou</option>
    <option value="Alger">Alger</option>
    <option value="Djelfa">Djelfa</option>
    <option value="Jijel">Jijel</option>
    <option value="Sétif">Sétif</option>
    <option value="Saïda">Saïda</option>
    <option value="Skikda">Skikda</option>
    <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
    <option value="Annaba">Annaba</option>
    <option value="Guelma">Guelma</option>
    <option value="Constantine">Constantine</option>
    <option value="Médéa">Médéa</option>
    <option value="Mostaganem">Mostaganem</option>
    <option value="M'Sila">M'Sila</option>
    <option value="Mascara">Mascara</option>
    <option value="Ouargla">Ouargla</option>
    <option value="Oran">Oran</option>
    <option value="El Bayadh">El Bayadh</option>
    <option value="Illizi">Illizi</option>
    <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
    <option value="Boumerdès">Boumerdès</option>
    <option value="El Tarf">El Tarf</option>
    <option value="Tindouf">Tindouf</option>
    <option value="Tissemsilt">Tissemsilt</option>
    <option value="El Oued">El Oued</option>
    <option value="Khenchela">Khenchela</option>
    <option value="Souk Ahras">Souk Ahras</option>
    <option value="Tipaza">Tipaza</option>
    <option value="Mila">Mila</option>
    <option value="Aïn Defla">Aïn Defla</option>
    <option value="Naâma">Naâma</option>
    <option value="Aïn Témouchent">Aïn Témouchent</option>
    <option value="Ghardaïa">Ghardaïa</option>
    <option value="Relizane">Relizane</option>
                </select>
                <label for="Adresse_personal">Address</label>
                <textarea name="Adresse" id="Adresse_personal"></textarea>
                <label for="Mobile_personal">Mobile Phone Number</label>
                <input type="text" name="Mobile" id="Mobile_personal">
                <label for="ICD_personal">Identity Card Number</label>
                <input type="text" name="ICD" id="ICD_personal">
                <label for="Date_issue_id_personal">Date of Issue of the ID</label>
                <input type="date" name="Date_issue_id" id="Date_issue_id_personal">
                <label for="Issuer_authority_personal">Issuer Authority</label>
                <select name="Issuer_authority" id="Issuer_authority_personal">
                    <option value="Municipality">Municipality</option>
                    <option value="Daire">Daire</option>
                </select>
                <label for="Email_personal">Email</label>
                <input type="text" name="Email" id="Email_personal">
                <input type="submit" value="SEND">
            </form>
        
            <!-- Form for Business Client -->
            <form id="business_form" action="{{route('form.submitdemande')}}" method="post" style="display: none;">
                @csrf
                @method('post')
                <input type="hidden" name="Type_client" value="Business">
                <label for="Type_demande_business">Nature of the Request</label>
                <select name="Type_demande" id="Type_demande_business">
                    <option value="Request a Landline">Request a Landline</option>
                    <option value="Request a Leased line">Request a Leased line</option>
                    <option value="Pack Moohtarif">Pack Moohtarif</option>
                    <option value="Intranet / VPN">Intranet / VPN</option>
                    <option value="Idoom 4G LTE offer">Request Idoom internet pro (ADSL/4G/FIBRE)</option>
                </select>
                <label for="Nom_client_business">Company Name</label>
                <input type="text" name="Nom_client" id="Nom_client_business">
                <label for="Prenom_client_business">Company Specialty</label>
                <input type="text" name="Prenom_client" id="Prenom_client_business">
                <label for="Birthday_date_business">Birthday Date</label>
                <input type="date" name="Birthday_date" id="Birthday_date_business">
                <label for="Fixe_business">Landline Number</label>
                <input type="text" name="Fixe" id="Fixe_business">
                <label for="Wilaya_client_business">Wilaya</label>
                <select name="Wilaya_client" id="Wilaya_client_business">
                    <option value="">--Select Wilaya--</option>
                    <option value="Adrar">Adrar</option>
                    <option value="Chlef">Chlef</option>
                    <option value="Laghouat">Laghouat</option>
                    <option value="Oum El Bouaghi">Oum El Bouaghi</option>
                    <option value="Batna">Batna</option>
                    <option value="Béjaïa">Béjaïa</option>
                    <option value="Biskra">Biskra</option>
                    <option value="Béchar">Béchar</option>
                    <option value="Blida">Blida</option>
                    <option value="Bouira">Bouira</option>
                    <option value="Tamanrasset">Tamanrasset</option>
                    <option value="Tébessa">Tébessa</option>
                    <option value="Tlemcen">Tlemcen</option>
                    <option value="Tiaret">Tiaret</option>
                    <option value="Tizi Ouzou">Tizi Ouzou</option>
                    <option value="Alger">Alger</option>
                    <option value="Djelfa">Djelfa</option>
                    <option value="Jijel">Jijel</option>
                    <option value="Sétif">Sétif</option>
                    <option value="Saïda">Saïda</option>
                    <option value="Skikda">Skikda</option>
                    <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
                    <option value="Annaba">Annaba</option>
                    <option value="Guelma">Guelma</option>
                    <option value="Constantine">Constantine</option>
                    <option value="Médéa">Médéa</option>
                    <option value="Mostaganem">Mostaganem</option>
                    <option value="M'Sila">M'Sila</option>
                    <option value="Mascara">Mascara</option>
                    <option value="Ouargla">Ouargla</option>
                    <option value="Oran">Oran</option>
                    <option value="El Bayadh">El Bayadh</option>
                    <option value="Illizi">Illizi</option>
                    <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
                    <option value="Boumerdès">Boumerdès</option>
                    <option value="El Tarf">El Tarf</option>
                    <option value="Tindouf">Tindouf</option>
                    <option value="Tissemsilt">Tissemsilt</option>
                    <option value="El Oued">El Oued</option>
                    <option value="Khenchela">Khenchela</option>
                    <option value="Souk Ahras">Souk Ahras</option>
                    <option value="Tipaza">Tipaza</option>
                    <option value="Mila">Mila</option>
                    <option value="Aïn Defla">Aïn Defla</option>
                    <option value="Naâma">Naâma</option>
                    <option value="Aïn Témouchent">Aïn Témouchent</option>
                    <option value="Ghardaïa">Ghardaïa</option>
                    <option value="Relizane">Relizane</option>
                </select>
                <label for="Adresse_business">Address</label>
                <textarea name="Adresse" id="Adresse_business"></textarea>
                <label for="Mobile_business">Mobile Phone Number</label>
                <input type="text" name="Mobile" id="Mobile_business">
                <label for="ICD_business">Identity Card Number</label>
                <input type="text" name="ICD" id="ICD_business">
                <label for="Date_issue_id_business">Date of Issue of the ID</label>
                <input type="date" name="Date_issue_id" id="Date_issue_id_business">
                <label for="Issuer_authority_business">Issuer Authority</label>
                <select name="Issuer_authority" id="Issuer_authority_business">
                    <option value="Municipality">Municipality</option>
                    <option value="Daire">Daire</option>
                </select>
                <label for="Email_business">Email</label>
                <input type="text" name="Email" id="Email_business">
                <input type="submit" value="SEND">
            </form>
        
            <!-- Form for Reseller Client -->
            <form id="reseller_form" action="{{route('form.submitdemande')}}" method="post" style="display: none;">
                @csrf
                @method('post')
                <input type="hidden" name="Type_client" value="Reseller">
                <label for="Type_demande_reseller">Nature of the Request</label>
                <select name="Type_demande" id="Type_demande_reseller">
                    <option value="Request for a reseller scratch card">Request for a reseller scratch card</option>
                </select>
                <label for="Nom_client_reseller">Title</label>
                <select name="Nom_client" id="Nom_client_reseller">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                </select>
                <label for="Nom_client_reseller">Nom Reseller</label>
                <input type="text" name="Prenom_client" id="Nom_client_reseller">
                <label for="Birthday_date_reseller">Birthday Date</label>
                <input type="date" name="Birthday_date" id="Birthday_date_reseller">
                <label for="Fixe_reseller">Landline Number</label>
                <input type="text" name="Fixe" id="Fixe_reseller">
                <label for="Wilaya_client_reseller">Wilaya</label>
                <select name="Wilaya_client" id="Wilaya_client_reseller">
                    <option value="">--Select Wilaya--</option>
                    <option value="Adrar">Adrar</option>
    <option value="Chlef">Chlef</option>
    <option value="Laghouat">Laghouat</option>
    <option value="Oum El Bouaghi">Oum El Bouaghi</option>
    <option value="Batna">Batna</option>
    <option value="Béjaïa">Béjaïa</option>
    <option value="Biskra">Biskra</option>
    <option value="Béchar">Béchar</option>
    <option value="Blida">Blida</option>
    <option value="Bouira">Bouira</option>
    <option value="Tamanrasset">Tamanrasset</option>
    <option value="Tébessa">Tébessa</option>
    <option value="Tlemcen">Tlemcen</option>
    <option value="Tiaret">Tiaret</option>
    <option value="Tizi Ouzou">Tizi Ouzou</option>
    <option value="Alger">Alger</option>
    <option value="Djelfa">Djelfa</option>
    <option value="Jijel">Jijel</option>
    <option value="Sétif">Sétif</option>
    <option value="Saïda">Saïda</option>
    <option value="Skikda">Skikda</option>
    <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
    <option value="Annaba">Annaba</option>
    <option value="Guelma">Guelma</option>
    <option value="Constantine">Constantine</option>
    <option value="Médéa">Médéa</option>
    <option value="Mostaganem">Mostaganem</option>
    <option value="M'Sila">M'Sila</option>
    <option value="Mascara">Mascara</option>
    <option value="Ouargla">Ouargla</option>
    <option value="Oran">Oran</option>
    <option value="El Bayadh">El Bayadh</option>
    <option value="Illizi">Illizi</option>
    <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
    <option value="Boumerdès">Boumerdès</option>
    <option value="El Tarf">El Tarf</option>
    <option value="Tindouf">Tindouf</option>
    <option value="Tissemsilt">Tissemsilt</option>
    <option value="El Oued">El Oued</option>
    <option value="Khenchela">Khenchela</option>
    <option value="Souk Ahras">Souk Ahras</option>
    <option value="Tipaza">Tipaza</option>
    <option value="Mila">Mila</option>
    <option value="Aïn Defla">Aïn Defla</option>
    <option value="Naâma">Naâma</option>
    <option value="Aïn Témouchent">Aïn Témouchent</option>
    <option value="Ghardaïa">Ghardaïa</option>
    <option value="Relizane">Relizane</option>
                </select>
                <label for="Adresse_reseller">Address</label>
                <textarea name="Adresse" id="Adresse_reseller"></textarea>
                <label for="Mobile_reseller">Mobile Phone Number</label>
                <input type="text" name="Mobile" id="Mobile_reseller">
                <label for="ICD_reseller">Identity Card Number</label>
                <input type="text" name="ICD" id="ICD_reseller">
                <label for="Date_issue_id_reseller">Date of Issue of the ID</label>
                <input type="date" name="Date_issue_id" id="Date_issue_id_reseller">
                <label for="Issuer_authority_reseller">Issuer Authority</label>
                <select name="Issuer_authority" id="Issuer_authority_reseller">
                    <option value="Municipality">Municipality</option>
                    <option value="Daire">Daire</option>
                </select>
                <label for="Email_reseller">Email</label>
                <input type="text" name="Email" id="Email_reseller">
                <input type="submit" value="SEND">
            </form>
        
            
        </div>
        
         <script>
            // document.addEventListener('DOMContentLoaded', function () {
            //     const typeClientSelect = document.getElementById('Type_client');
            //     const personalForm = document.getElementById('personal_form');
            //     const businessForm = document.getElementById('business_form');
            //     const resellerForm = document.getElementById('reseller_form');
        
            //     typeClientSelect.addEventListener('change', function () {
            //        if (typeClientSelect.value === 'Personal') {
            //             personalForm.style.display = 'block';
            //             businessForm.style.display = 'none';
            //             resellerForm.style.display = 'none';
            //         } else
            //          if (typeClientSelect.value === 'Business') {
            //             personalForm.style.display = 'none';
            //             businessForm.style.display = 'block';
            //             resellerForm.style.display = 'none';
            //         } else if (typeClientSelect.value === 'Reseller') {
            //             personalForm.style.display = 'none';
            //             businessForm.style.display = 'none';
            //             resellerForm.style.display = 'block';
            //         }
            //     });
            // });

            document.addEventListener('DOMContentLoaded', function () {
    const typeClientSelect = document.getElementById('Type_client');
    const personalForm = document.getElementById('personal_form');
    const businessForm = document.getElementById('business_form');
    const resellerForm = document.getElementById('reseller_form');

    typeClientSelect.addEventListener('change', function () {
        const selectedValue = typeClientSelect.value;

        personalForm.style.display = selectedValue === 'Personal' ? 'block' : 'none';
        businessForm.style.display = selectedValue === 'Business' ? 'block' : 'none';
        resellerForm.style.display = selectedValue === 'Reseller' ? 'block' : 'none';
    });
    typeClientSelect.dispatchEvent(new Event('change'));
});

        </script> 
        
        
    

        <div class="dr">
        <h2>Formulaire Derangement</h2>
        <form action="{{route('form.submitderangement')}}" method="post">
            @csrf
            @method('post')
            <label for="Type_client">Type of Client</label>
            <select name="Type_client" id="Type_client">
                <option value="Personal">Personal</option>
                <option value="Business">Business</option>
            </select>

            <label for="Nom_client">Last Name/Company Name</label>
            <input type="text" name="Nom_client" id="Nom_client">

            <label for="Prenom_client">First name</label>
            <input type="text" name="Prenom_client" id="Prenom_client">
           
            <label for="Fixe">Landline number</label>
            <input type="text" name="Fixe" id="Fixe">
            <label for="Wilaya_client">Wilaya</label>
            <select name="Wilaya_client" id="Wilaya_client">
                <option value="">--Select Wilaya--</option>
                <option value="Adrar">Adrar</option>
                <option value="Chlef">Chlef</option>
                <option value="Laghouat">Laghouat</option>
                <option value="Oum El Bouaghi">Oum El Bouaghi</option>
                <option value="Batna">Batna</option>
                <option value="Béjaïa">Béjaïa</option>
                <option value="Biskra">Biskra</option>
                <option value="Béchar">Béchar</option>
                <option value="Blida">Blida</option>
                <option value="Bouira">Bouira</option>
                <option value="Tamanrasset">Tamanrasset</option>
                <option value="Tébessa">Tébessa</option>
                <option value="Tlemcen">Tlemcen</option>
                <option value="Tiaret">Tiaret</option>
                <option value="Tizi Ouzou">Tizi Ouzou</option>
                <option value="Alger">Alger</option>
                <option value="Djelfa">Djelfa</option>
                <option value="Jijel">Jijel</option>
                <option value="Sétif">Sétif</option>
                <option value="Saïda">Saïda</option>
                <option value="Skikda">Skikda</option>
                <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
                <option value="Annaba">Annaba</option>
                <option value="Guelma">Guelma</option>
                <option value="Constantine">Constantine</option>
                <option value="Médéa">Médéa</option>
                <option value="Mostaganem">Mostaganem</option>
                <option value="M'Sila">M'Sila</option>
                <option value="Mascara">Mascara</option>
                <option value="Ouargla">Ouargla</option>
                <option value="Oran">Oran</option>
                <option value="El Bayadh">El Bayadh</option>
                <option value="Illizi">Illizi</option>
                <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
                <option value="Boumerdès">Boumerdès</option>
                <option value="El Tarf">El Tarf</option>
                <option value="Tindouf">Tindouf</option>
                <option value="Tissemsilt">Tissemsilt</option>
                <option value="El Oued">El Oued</option>
                <option value="Khenchela">Khenchela</option>
                <option value="Souk Ahras">Souk Ahras</option>
                <option value="Tipaza">Tipaza</option>
                <option value="Mila">Mila</option>
                <option value="Aïn Defla">Aïn Defla</option>
                <option value="Naâma">Naâma</option>
                <option value="Aïn Témouchent">Aïn Témouchent</option>
                <option value="Ghardaïa">Ghardaïa</option>
                <option value="Relizane">Relizane</option>
            </select>
            
            <label for="Adresse">Address</label>
                <textarea name="Adresse" id="Adresse"></textarea>
            {{-- <label for="Adresse">Address</label>
            <input type="text" name="Adresse" id="Adresse"> --}}

            <label for="Mobile">Mobile phone number</label>
            <input type="text" name="Mobile" id="Mobile">
            
            <label for="Email">Email</label>
            <input type="text" name="Email" id="Email">

            <label for="Type_derangement">Type of disturbance</label>
            <select name="Type_derangement" id="Type_derangement">
                <option value="No dial tone">No dial tone</option>
                <option value="Can't receive or make phone calls">Can't receive or make phone calls</option>
                <option value="I hear excess static">I hear excess static</option>
                <option value="Internet speed drops">Internet speed drops</option>
                <option value="No internet">No internet</option>
                <option value="Leased lines">Leased lines</option>
                <option value="IDOOM Internet PRO">IDOOM Internet PRO</option>
                <option value="Intranet/VPN">Intranet/VPN</option>
                <option value="Problèmes signaux non rétablis">Problèmes signaux non rétablis</option>
                <option value="High ping">High ping</option>
                <option value="Slow upload">Slow upload</option>
                <option value="Frequent drops">Frequent drops</option>
                <option value="Network coverage issues (4G LTE)">Network coverage issues (4G LTE)</option>
                <option value="No dial tone / No internet">No dial tone / No internet</option>
            </select>
            

            <input type="submit" value="SEND">
        </form>
        </div>
    </div>
</body>
</html>
