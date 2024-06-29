<div class="sidebar" id="sidebar">
    <div class="sidebar-heading">Menu ^</div>
    <nav class="nav flex-column">
        <a class="nav-link active" href="#"><i class="fas fa-tachometer-alt"></i> <span class="nav-text">   Home</span></a>
        <a class="nav-link" href="#"><i class="fas fa-user"></i> <span class="nav-text">   Profile</span></a>
        <a class="nav-link" href="#"><i class="fas fa-cog"></i> <span class="nav-text">   Settings</span></a>
        <!-- Logout Link -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i> <span class="nav-text out">Logout</span>
        </a>
        
    </nav>
</div>

<style>
    .out{
        color:red;
    }
    .sidebar {
        position: fixed;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        width: 50px;
        height: 180px;
        background-color: #343a40;
        color: #fff;
        transition: width 0.3s;
        overflow: hidden;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    .sidebar:hover {
        width: 130px;
    }
    .sidebar .sidebar-heading {
        padding: 10px 15px;
        font-size: 1.2em;
        
        white-space: nowrap;
        //overflow: hidden;
        //text-overflow: ellipsis;
        transform: rotate(90deg);
        transform-origin: left bottom;
    }
    .sidebar:hover .sidebar-heading {
        //transform: rotate(90deg);
        //transform-origin: left bottom;
        //transform: translateX(200px);
        display:none;
    }
    .sidebar .nav-link {
        color: #c2c7d0;
        display: flex;
        align-items: center;
        padding: 10px 15px;
    }
    .sidebar .nav-link i {
        margin-right: 10px;
    }
    .sidebar .nav-text {
        display: none;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .sidebar:hover .nav-text {
        display: inline;
    }
    .sidebar .nav-link:hover {
        background-color: #495057;
        color: #fff;
    }
</style>
