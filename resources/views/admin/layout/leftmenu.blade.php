 @php
     $secment1 = strtolower(request()->segment(1));
 @endphp
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
         <div class="sidebar-brand-text mx-3">
             <img src="{{ asset('assets_admin/logo.svg') }}" width="200" alt="" class="img-fluid">
         </div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="{{ route('home') }}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     @if (Auth::user()->level == 5)
         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link {{ $secment1 == 'user' || $secment1 == 'department' || $secment1 == 'documentgroup' ? '' : 'collapsed' }}"
                 href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                 aria-controls="collapseOne">
                 <i class="fas fa-fw fa-cog"></i>
                 <span>Setting</span>
             </a>
             <div id="collapseOne"
                 class="collapse  {{ $secment1 == 'user' || $secment1 == 'department' || $secment1 == 'documentgroup' ? 'show' : '' }}"
                 aria-labelledby="headingOne" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Setting:</h6>
                     <a class="collapse-item" href="{{ url('User') }}">User </a>
                     <a class="collapse-item" href="{{ url('User') }}">Add Section , Item </a>
                 </div>
             </div>
         </li>
     @endif

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link {{ $secment1 == 'user1' ? '' : 'collapsed' }}"
             href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
             aria-controls="collapseTwo">
             <i class="fas fa-fw fa-cog"></i>
             <span>Profile & Content page</span>
         </a>
         <div id="collapseTwo"
             class="collapse  {{ $secment1 == 'user1' ? 'show' : '' }}"
             aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Profile :</h6>
                 <a class="collapse-item" href="{{ url('') }}">Company</a>
                 <h6 class="collapse-header">Content page:</h6>
                 <a class="collapse-item" href="{{ url('') }}">Home </a>
                 <a class="collapse-item" href="{{ url('') }}">About us </a>
                 <a class="collapse-item" href="{{ url('') }}">Contact us</a>

             </div>
         </div>
     </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link {{ $secment1 == 'user1' ? '' : 'collapsed' }}"
            href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
            aria-controls="collapseThree">
            <i class="fas fa-fw fa-cog"></i>
            <span>Category & Product</span>
        </a>
        <div id="collapseThree"
            class="collapse  {{ $secment1 == 'user1' ? 'show' : '' }}"
            aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Category & Product :</h6>
                <a class="collapse-item" href="{{ url('') }}">Category</a>
                <a class="collapse-item" href="{{ url('') }}">Product</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link {{ $secment1 == 'user1' ? '' : 'collapsed' }}"
            href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
            aria-controls="collapseFour">
            <i class="fas fa-fw fa-cog"></i>
            <span>Feture</span>
        </a>
        <div id="collapseFour"
            class="collapse  {{ $secment1 == 'user1' ? 'show' : '' }}"
            aria-labelledby="headingFour" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Feture :</h6>
                <a class="collapse-item" href="{{ url('') }}">Gallery Group</a>
                <a class="collapse-item" href="{{ url('') }}">Gallery</a>
                <a class="collapse-item" href="{{ url('') }}">Blog</a>
                <a class="collapse-item" href="{{ url('') }}">News</a>
                <a class="collapse-item" href="{{ url('') }}">Youtube</a>
                <a class="collapse-item" href="{{ url('') }}">Testimonial</a>
            </div>
        </div>
    </li>

     <li class="nav-item my-5">
         <form method="POST" action="{{ route('logout') }}">
             @csrf
             <x-jet-dropdown-link href="{{ route('logout') }}" style="color:white !important" onclick="event.preventDefault();
                            this.closest('form').submit();">
                 <i class="fas fa-sign-out-alt"></i>
                 <span class="ml-1">logout</span>
             </x-jet-dropdown-link>
         </form>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->
