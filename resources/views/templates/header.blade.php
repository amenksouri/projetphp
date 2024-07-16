<style>
  
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    } 
    
    .dropdown-content a {
        background-color: #f8f9fa;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<header style="background-color: #f8f9fa; padding: 20px 0; border-bottom: 1px solid #e7e7e7; width: 100%;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
        <h1 style="margin: 0; color: #6c757d;"><i class="fa fa-thumb-tack" aria-hidden="true"></i>        Mesmar Fi Hit</h1>
        <nav>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex;">
                <li style="margin-right: 20px;"><a href="#" style="color: #007bff; text-decoration: none;">Home</a></li>
                <li style="margin-right: 20px;"><a href="#" style="color: #007bff; text-decoration: none;">About</a></li>
                    <li class="dropdown" style="margin-right: 20px;">
                    
                    
                        <a href="javascript:void(0)" style="color: #007bff; text-decoration: none;" class="dropbtn">Services</a>
                        <div class="dropdown-content">
                            <a href="#">Postuler</a>
                            <a href="/ProjetPhp/public/jobs/create">Proposer    </a>
                            
                        </div>
                    
                </li>
                <li><a href="#" style="color: #007bff; text-decoration: none;">Contact</a></li>
                <li style="margin-left: 20px;"><a href="#" style="color: #007bff; text-decoration: none;">Our Team</a></li>
            </ul>
        </nav>
    </div>
</header>