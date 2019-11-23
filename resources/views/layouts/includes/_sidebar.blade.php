<div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <li><a href="{{url('/dashboard')}}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

              @if(auth()->user()->role == 'admin')
            	<li><a href="/calas" class=""><i class="lnr lnr-user"></i> <span>Data Calas</span></a></li>
              <li><a href="/posts" class=""><i class="lnr lnr-pencil"></i> <span>posts</span></a></li>
              @endif
               @if(auth()->user()->role == 'calas')
              <li><a href="/status_kelulusan" class=""><i class="lnr lnr-pencil"></i> <span>Status Kelulusan</span></a></li>
            @endif
          </ul>
        </nav>
      </div>
    </div>