require 'mail'

# Configure SMTP settings
options = { 
  :address              => "smtp.gmail.com",
  :port                 => 587,
  :user_name            => "sushant.chaudhari20@pccoepune.org",
  :password             => "120B10720",
  :authentication       => 'plain',
  :enable_starttls_auto => true  
}

# Create email message
mail = Mail.new do
  from    'sushant.chaudhari20@pccoepune.org'
  to      'chaudharisushant50@gmail.com'
  subject 'Hello Bruce Wayne! '
  body    'This is a test email sent from a Ruby'
end

# Send email
mail.delivery_method(:smtp, options)
mail.deliver!
puts "Email sent successfully!"
