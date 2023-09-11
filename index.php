<!DOCTYPE html>
<html>

<head>
    <title>Repeater Form with Dynamic Dropdowns</title>
</head>

<body>
    <form method="post" action="process.php">
        <div id="repeater-container">
            <div class="repeater-item">
                <select name="dropdown[]">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select>
                <button type="button" class="remove-item">Remove</button>
            </div>
        </div>
        <button type="button" id="add-item">Add Dropdown</button>
        <input type="submit" value="Submit">
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const repeaterContainer = document.getElementById('repeater-container');
            const addItemButton = document.getElementById('add-item');

            addItemButton.addEventListener('click', function() {
                const newItem = document.createElement('div');
                newItem.classList.add('repeater-item');
                newItem.innerHTML = `
                    <select name="dropdown[]">
                        <option value="Option 1">Option 1</option>
                        <option value="Option 2">Option 2</option>
                        <option value="Option 3">Option 3</option>
                    </select>
                    <button type="button" class="remove-item">Remove</button>
                `;
                repeaterContainer.appendChild(newItem);
            });

            repeaterContainer.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-item')) {
                    event.target.parentNode.remove();
                }
            });
        });
    </script>
</body>

</html>