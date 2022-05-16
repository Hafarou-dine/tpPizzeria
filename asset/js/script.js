function addOption(text, value){
    const select = document.getElementById("cat");
    const newOption = new Option(text, value);
    select.options.add(newOption);
}