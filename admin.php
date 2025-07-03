<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/style/admin.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="admin/script/dashboard.js" defer></script>
    <title>Admin dashboard</title>
</head>
<body>
    <header>
        <div id="header-sub-con">
            <h1>OFW Tulong admin</h1>
        </div>
    </header>
    <nav id="nav-con">
        <ul>
            <li><button  class="button active" data-target="#contact-us-con">Contact Us</button></li>
            <li><button  class="button" data-target="#membership-con">Membership</button></li>
            <li><button  class="button" data-target="#request-assistance-con">Request Assistance</button></li>
        </ul>
    </nav>
    <div id="sidebar">
        <div id="profile">
            <div id="profile-pic">
                
                <img src="" alt="profile picture">
            </div>
            <div>Name Here</div>
        </div>
        <ul>
            <li><button  class="side-btn active" data-target="#dashboard">Dashboard</button></li>
            <li><button  class="side-btn" data-target="#report">Report</button></li>
            <li><button  class="side-btn" data-target="#logout">Logout</button></li>
        </ul>
        
    </div>
    
    <div id="dashboard">
        <div id="contact-us-con" class="tab">
            <table>
                <th>ID</th>
                <th>Full name</th>
                <th>Email address</th>
                <tr>
                    <td>1</td>
                    <td>El</td>
                    <td>el@gmail.com</td>
                    <td><button id="see-all-btn">See all</button></td>
                </tr>
            </table>
        </div>
        <!-- other tab inside dashboard -->
        <div id="membership-con" class="tab"></div>
        <div id="request-assistance-con" class="tab"></div>

        <!-- when the see all button is click this tab will appear to show all the details -->
        <div id="contact-us-alldetails">
            <div>Name:</div>
            <div></div>
        </div>
    </div>

 </body>
</html>