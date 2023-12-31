<?php 

session_start();
include "db_conn.php";


if (isset($_SESSION['sno']) && isset($_SESSION['user_id'])) 

 ?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="icon" href="icon_path" type="image/icon type">
<title>DRM</title>

<!-- Head Section -->

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="styles\list-members.css">
</head>

<!-- Body Section -->

<body>
    <script src="script\list-members.js"></script>

    <div class="main">
        <div class="section">
            <!-- Top Nav Bar Section -->
            <div class="navbar">
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <h1 class="navbar-heading">List of Members
                    <a href="login.php"><button class="logout-btn" name="button" type="button">Logout</button></a>
                </h1>
            </div>
            <!-- Actual Body Container -->
            <div class="main-body-container">
            <div class="add-btn"><a href="add-member.php" type="button">Add Member</a></div>                
            <table class="table">
                    <tr>
                        <!-- <th><input type="checkbox"></th> -->
                        <th>Member ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Review Skill Set</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>1234</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>Scientist A</td>
                        <td>DSQA</td>
                        <td>STR, STD, SDD</td>
                        <td class="updt-btn"><a href="update-member.php?<?php echo time(); ?>"><button>Update</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>3412</td>
                        <td>Peater</td>
                        <td>Parker</td>
                        <td>Scientist B</td>
                        <td>DSQA</td>
                        <td>STR, STD</td>
                        <td class="updt-btn"><a href="update-member.php?<?php echo time(); ?>"><button>Update</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>2341</td>
                        <td>John</td>
                        <td>Paul</td>
                        <td>Scientist A</td>
                        <td>DSQA</td>
                        <td>STD, SDD</td>
                        <td class="updt-btn"><a href="update-member.php?<?php echo time(); ?>"><button>Update</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>2143</td>
                        <td>Arther</td>
                        <td>Dane</td>
                        <td>Scientist B</td>
                        <td>DSQA</td>
                        <td>STR, STD, SDD</td>
                        <td class="updt-btn"><a href="update-member.php?<?php echo time(); ?>"><button>Update</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>1324</td>
                        <td>John</td>
                        <td>Peater</td>
                        <td>Scientist A</td>
                        <td>DSQA</td>
                        <td>STR, STD</td>
                        <td class="updt-btn"><a href="update-member.php?<?php echo time(); ?>"><button>Update</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>4231</td>
                        <td>Peater</td>
                        <td>Prabhakar</td>
                        <td>Scientist B</td>
                        <td>DSQA</td>
                        <td>STD, SDD</td>
                        <td class="updt-btn"><a href="update-member.php?<?php echo time(); ?>"><button>Update</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>4321</td>
                        <td>John</td>
                        <td>Steaven</td>
                        <td>Scientist A</td>
                        <td>DSQA</td>
                        <td>STR, STD, SDD</td>
                        <td class="updt-btn"><a href="update-member.php?<?php echo time(); ?>"><button>Update</button></a></td>
                        <td class="del-btn"><a href=""><button>Delete</button></a></td>
                    </tr>
                </table>
                <div class="pagination">
                    <a href="#" class="page-num">«</a>
                    <a href="#" class="page-num">1</a>
                    <a href="#" class="page-num">2</a>
                    <a href="#" class="page-num">3</a>
                    <a href="#" class="page-num">4</a>
                    <a href="#" class="page-num">»</a>
                </div>
            </div>
        </div>
        <!-- Side Bar Section -->
        <div class="sidebar">
            <div class="profile">
                <img src="images\dpp.jpg" alt="profile_picture">
                <h3><?php $emptySpace = " "; echo $_SESSION['fname'] . $emptySpace . $_SESSION['lname']; ?></h3>
                <p>Technology Head</p>
            </div>
            <ul>
                <li>
                    <a href="dashboard.php?<?php echo time(); ?>">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="list-members.php?<?php echo time(); ?>" class="active">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="item">List of Members</span>
                    </a>
                </li>
                <li>
                    <a href="list-documents.php?<?php echo time(); ?>">
                        <span class="icon"><i class="fas fa-list-ol"></i></span>
                        <span class="item">List of Documents</span>
                    </a>
                </li>
                <li>
                    <a href="doc-assign.php?<?php echo time(); ?>">
                        <span class="icon"><i class="fas fa-file-signature"></i></span>
                        <span class="item">Assign to members</span>
                    </a>
                </li>
                <li>
                    <a href="view-review-pts.php?<?php echo time(); ?>">
                        <span class="icon"><i class="fas fa-solid fa-file-lines"></i></span> 
                        <span class="item">View Review Points</span>
                    </a>
                </li>
                <li>
                    <a href="report-gen.?<?php echo time(); ?>">
                        <span class="icon"><i class="fas fa-duotone fa-chart-simple"></i></span> 
                        <span class="item">Report Generation</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function () {
            document.querySelector("body").classList.toggle("active");
        })
    </script>
</body>

</html>