<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="header_wrapper">
            <div class="logo_wrap">
                <img src="/img/notepad.png" alt="logo">
                <h1 class="header_logo-h1">
                    NoteSync
                </h1>
            </div>
            <h1 class="header_name"><?=$_COOKIE['user']?></h1>
            <button class="header_btn-create">Create</button>
        </div>
        
    </header>
</body>
</html>