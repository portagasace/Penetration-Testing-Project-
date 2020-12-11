# Penetration-Testing-Project-
In this project my aim was to demonstrate Cross site request forgery on a sample website using POST method.
Cross-site request forgery (also known as CSRF) is a web security vulnerability that allows an attacker to induce users to perform actions that they do not intend to perform. It allows an attacker to partly circumvent the same origin policy, which is designed to prevent different websites from interfering with each other.
Most interesting CSRF vulnerabilities arise due to mistakes made in the validation of CSRF tokens.

For the demonstration, I have created a dummy “Gainesville Pet Shop” website where cats are being purchased.
The user has a Wallet with pre-loaded money and a checkout option along with Top Up option.
The “index.php” file has three options available: -
•	HTTP Get 
•	HTTP Post 
•	HTTP with Anti-CSRF Token
The HTTP get will navigate us to the normal “catshop.php” page logged in with the user, The HTTP post option is where CSRF is demonstrated where using just the page we can checkout as the user and balance gets deducted from the user wallet.
Similarly, the third option where we use HTTP Post with Anti-CSRF token, we will observe that the checkout is no longer possible.
Also, when we try to directly visit the payment page, it will return an unauthorized access error.
