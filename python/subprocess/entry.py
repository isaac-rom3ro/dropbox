import subprocess as sp

# Passing command as string with arguments
# subprocess.run('ls -la', shell=True) 

# Way more secure
# This is gonna run it in a external terminal
# external_terminal = subprocess.run(['ls', '-la'])

# var.args -> show the arguments that we have passed
# var.returncode -> 0 if no errors | != if errors
# var.stdout -> Will return the actual response

# with open('python/subprocess/output.txt', 'w') as file: 
#     output = subprocess.run('ls -la oooooo', shell=True, text=True, stdout=file)

# check=True it will throw as an exception 
# check=False we can check manually using var.returncode != 0
# var.stderr show the actual error 
# When passing the property as argument we can actually redirect the output of it 
# var.stderr = subprocess.DEVNULL : The output is not keep inside our object
# output = subprocess.run(['ls', '-la', 'oooo'], capture_output=True, text=True)

# if output.returncode != 0:
#     print(output.stderr)


content = sp.run("cat python/subprocess/file.txt", shell=True, capture_output=True, text=True)

word = "world"

# We can pass our content as an argument using input=content
# And of course using grep command inside it 
grab = sp.run(["grep", "-n", word], input=content.stdout, text=True)