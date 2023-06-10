<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Admin Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Script/bootstrap.min.css'>
    <script src='Script/jquery-3.2.1.slim.min.js'></script>
    <script src='Script/popper.min.js'></script>
    <script src='Script/bootstrap.min.js'></script>
    <script src="Script/script.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="image/Logo.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Farro:wght@300&family=Imprima&family=Montserrat:wght@100&family=Plus+Jakarta+Sans:wght@200&family=Secular+One&display=swap"
        rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary fixed-top" id="navbar_top">
            <div class="container-fluid">
                <!-- <img src="image/logo.png" alt="" width="35px" class="mr-3"> -->
                <a class="navbar-brand"><img src="image/logo.png" alt="" width="30" class="mr-2">សកលវិទ្យាល័យ ប៊ែលធី
                    អន្តរជាតិ</a>
            </div>
        </nav>
    </header>
    <div class="row flex-box">
        <div class="col-md-2 left-panel">
            <ul>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">ទំព័រដើម</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">ស្វែងរក</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">បង្ហាញទិន្នន័យ</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">បញ្ចូលទិន្នន័យ</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">ការកែប្រែ</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <span class="title">ព័ត៌មានថ្មីៗ</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">ចាកចេញ</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-10 right-panel">
            <div class="form1">
                <div class="head_text">
                    <span>ការបញ្ចូលទិន្និន័យ</span>
                    <p>សូមពិនិត្យនិងបញ្ចូលទិន្និន័យខាងក្រោមនេះ</p>
                </div>
                <div class="row form">
                    <div class="col-lg-8 mx-auto">
                        <form class="boxinsert">
                            <div class="row">
                                <!-- left -->
                                <div class="col-sm-6">
                                    <span class="text-on">ឈ្មោះ</span>
                                    <input type="text" class="box">
                                    <!--  -->
                                    <span class="text-on">ឈ្មោះឡាតាំង</span>
                                    <input type="text" class="box">
                                    <!--  -->
                                    <span class="text-on">ភេទ</span>
                                    <select name="" id="" class="box">
                                        <option value="1" class="box">ប្រុស</option>
                                        <option value="2" class="box">ស្រី</option>
                                    </select>
                                    <!--  -->
                                    <span class="text-on">ថ្ងៃខែឆ្នាំកំណើត</span>
                                    <input type="date" class="box" id="date">
                                </div>
                                <!-- right -->
                                <div class="col-sm-6">
                                    <span class="text-on">ភេទ</span>
                                    <select name="" id="" class="box">
                                        <option value="1"  class="box">ប្រុស</option>
                                        <option value="2"  class="box">ស្រី</option>
                                    </select>
                                    <!--  -->
                                    <span class="text-on">ថ្ងៃខែឆ្នាំកំណើត</span>
                                    <input type="date" class="box" id="date">
                                    <!--  -->
                                    <span class="text-on">ឈ្មោះ</span>
                                    <input type="text" class="box">
                                    <!--  -->
                                    <span class="text-on">ឈ្មោះឡាតាំង</span>
                                    <input type="text" class="box">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-12 pb-4" style="text-align: right">
                                    <button type="submit" name="Insert" value="Insert"
                                        class="btn btn-info">បញ្ចូល</button>
                                    <button type="submit" name="Update" value="Update"
                                        class="btn btn-success">កែប្រែ</button>
                                    <button type="submit" name="Delete" value="Delete"
                                        class="btn btn-danger">លុប</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>