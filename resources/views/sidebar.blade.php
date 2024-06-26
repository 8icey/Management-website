{{-- english sidebar --}}
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Drop Down Sidebar Menu | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="IMAGES/logoalg.png">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

aside .sidebar{
    display: flex;
    flex-direction: column;
    height: 86vh;
    position: relative;
    top : 3rem;

}

aside h3{
    font-style: 500;
}

aside .sidebar a {
    display: flex;
    color: #184c99;
    margin-left: 2rem;
    gap : 1rem;
    align-items: center;
    position: relative;
    height: 3.7rem;
    transition: all 300ms ease ;
}

aside .sidebar a span {
    font-size: 1.6rem;
    transition: all 300ms ease;
}

aside .sidebar a.active{
    background:#184c99;
    color: rgb(21, 3, 49);
    margin-left: 0;
}

aside .sidebar a.active:before{
    content: '';
    width: 6px;
    height: 100%;
    background: rgb(21, 3, 49);
}

aside .sidebar a.active span {

    color: rgb(21, 3, 49);
    margin-left:calc(1rem - 3px) ;
}

aside .sidebar a:hover{
    color: rgb(21, 3, 49);
}

aside .sidebar a:hover span {
    margin-left: 1rem;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.sidebar{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 260px;
  background: #11101d;
  z-index: 100;
}

.sidebar .logo-details img{
width:50%;
margin-left: 1cm;
margin-top: 0.5cm; 
}
.sidebar .logo-details{
  height: 60px;
  width: 100%;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 30px;
  color: #fff;
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
}
.sidebar .logo-details .logo_name{
  font-size: 22px;
  color: #fff;
  font-weight: 600;
  transition: 0.3s ease;
  transition-delay: 0.1s;
}

.sidebar .nav-links{
  height: 100%;
  padding: 30px 0 150px 0;
  overflow: auto;
}

.sidebar .nav-links::-webkit-scrollbar{
  display: none;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li:hover{
  background: #1d1b31;
}
.sidebar .nav-links li .iocn-link{
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.sidebar .nav-links li i{
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
  color: #fff;
  font-size: 26px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.sidebar .nav-links li.showMenu i.arrow{
  transform: rotate(-180deg);
}

.sidebar .nav-links li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sidebar .nav-links li a .link_name{
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  /* transition: all 1s ease; */
}

.sidebar .nav-links li .sub-menu{
  padding: 6px 6px 14px 80px;
  margin-top: -10px;
  background: #1d1b31; 
  
  
}
.sidebar .nav-links li.showMenu .sub-menu{
  display: block;
}

.sidebar .nav-links li .sub-menu li a{
  color: #fff;
  font-size: 15px;
  padding: 5px 0;
  white-space: nowrap;
  opacity: 0.6;
  transition: all 0.3s ease;
}
.sidebar .nav-links li .sub-menu a:hover{
  opacity: 1;
}


.sidebar .nav-links li .sub-menu .link_name{
  display: none;
}

.sidebar .nav-links li .sub-menu.blank{
  opacity: 1;
  pointer-events: auto;
  padding: 3px 20px 6px 16px;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li .sub-menu {
  display: none;
}

.sidebar .nav-links li:hover .sub-menu.blank{
  top: 50%;
  transform: translateY(-50%);
}
 .sidebar .nav-links li:hover .sub-menu{
    display: block;
} 
.sidebar .profile-details{
  position: fixed;
  bottom: 0;
  width: 260px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #1d1b31;
  padding: 12px 0;
  transition: all 0.5s ease;
}
.sidebar .profile-details .profile-content{
  display: flex;
  align-items: center;
}
.sidebar .profile-details img{
  height: 52px;
  width: 52px;
  object-fit: cover;
  border-radius: 16px;
  margin: 0 14px 0 12px;
  background: #1d1b31;
  transition: all 0.5s ease;
}
.sidebar .profile-details {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 10px; 
}
.sidebar .profile-details .name-job {
  display: flex;
  flex-direction: column;
  align-items: center;
  color: #fff;
  font-weight: 500;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  width: 100%;
  font-size: 20px;
  margin-bottom: 4px;
}
.sidebar .profile-details .profile_name,
.sidebar .profile-details .job {
  color: #fff;
  font-weight: 500;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  width: 100%;
}
.sidebar .profile-details .profile_name {
  font-size: 20px;
  margin-bottom: 4px; 
}
/* .category-container {
  padding: 20px;
  border-radius: 5px;
}
.content {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  grid-gap: 20px;
} */


@media (max-width: 400px) {
  .sidebar.close .nav-links li .sub-menu{
    display: none;
  }
  .sidebar{
    width: 78px;
  }
  .sidebar.close{
    width: 0;
  }
  .home-section{
    left: 78px;
    width: calc(100% - 78px);
    z-index: 100;
  }
  .sidebar.close ~ .home-section{
    width: 100%;
    left: 0;
  }
}
.sidebar .nav-links li .sub-menu li a.link_name {
    transition: none;
}
    </style>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      
        <img src="{{URL('IMAGES/algtel.png')}}" alt="algerietelecom">
    </div>
    <ul class="nav-links">
      <li>
        <a href="{{ route('homepage') }}">
          <i class='bx bx-home'></i>
          <span class="link_name">Home</span>
        </a>
    </li>
      <li>
        <div class="iocn-link">
          <a href="{{ route('demande.adsl') }}">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Request</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          {{-- <li><a class="link_name" href="#">Demande</a></li> --}}
            <li><a href="{{ route('demande.adsl') }}">Adsl</a></li>
          <li><a href="{{ route('demande.fibre') }}">Fibre</a></li>
          <li><a href="{{ route('demande.quatreg') }}">4G</a></li>
          <li><a href="{{ route('demande.fixe') }}">Fixe</a></li>
        </ul>
      </li>
      <li>
        <a href="{{ route('derangement.index') }}">
          {{-- <i class='bx bx-pie-chart-alt-2' ></i> --}}
          <i class='bx bx-error' ></i>
          <span class="link_name">Disturbance</span>
        </a>
      </li>




      <li>
        <div class="iocn-link">
          <a href="{{ route('msg.index') }}">
            <i class='bx bx-message' ></i>
            <span class="link_name">Messages</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          {{-- <li><a class="link_name" href="#">Demande</a></li> --}}
            <li><a href="{{ route('msg.index') }}">Received</a></li>
          <li><a href="{{ route('msg.send') }}">Send</a></li>
          
        </ul>
      </li>




      @php
      $user = session('user');
  @endphp
      @if($user && $user->Role !== 'dot')
      <li>
        <div class="iocn-link">
          <a href="{{ route('dot.index') }}">
            <i class='bx bx-male' ></i>
            <span class="link_name" style="font-size: 16px;">Dot</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a href="{{ route('dot.index') }}">Dot List</a></li>
          <li><a href="{{ route('dot.create') }}">Create Dot</a></li>
        </ul>
      </li>
      @endif
      <li>
        <a href="{{ route('settings') }}">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Settings</span>
        </a>
    </li>
      <li>
    <div class="profile-details">
      <div class="name-job">
        <div class="profile_name">{{ $user->Nom_user }} {{ $user->Prenom_user }}</div>
        <div class="job">( {{ $user->Role }} {{ $user->Wilaya_user }} )</div>
      </div>
      <a href="{{ route('logout') }}" aria-label="Logout">
        <i class='bx bx-log-out'></i> 
    </a>
    
    </div>
  </li>
</ul>
  </div>
</body>
</html> 