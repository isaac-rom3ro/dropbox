from InquirerPy import inquirer

choice = inquirer.select(
    message="Choose an option:",
    choices=["Option 1", "Option 2", "Option 3"],
    qmark=""
).execute()

print(f"You selected: {choice}")