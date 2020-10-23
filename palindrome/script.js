function palindrome(text) {
    let rev = text.split("").reverse().join("")
    let length = [...rev].length
    let slice = rev.substr(1,length)
    console.log(text+slice);
    
}

palindrome("faisal")