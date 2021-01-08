function reservation_input(value)
{
    if (value == "")
    {
        alert("로그인 후 이용 가능합니다.");    
        return;
    }
    else
    {
        location.href = "books_check.php"
    }
}