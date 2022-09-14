let suggestions = [];

$.getJSON("./myfile.json", function(json) {
    names = json.name;
    for (let i = 1; i < 30; i++) {
        suggestions[i] = names[i];
    }
    console.log(suggestions);
});