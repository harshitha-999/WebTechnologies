<html>
    <body>
       
<?php   

$fs=fopen("source.txt", "r");
$ft=fopen("target1.txt", "w");

if ($fs==NULL)
{
    echo "Can't Open Source File ...";
    exit(0);
}

if ($ft==NULL)
{
    echo "Can't Open Destination File ...";
    fclose ($fs);
    exit(1);
}

else
{
    while ($ch=fgets($fs))
        fputs($ft, $ch);

    fclose ($fs);
    fclose ($ft);
}

echo "Contents from source file copied to destination file successfully !!";
?>
</body>
</html>
