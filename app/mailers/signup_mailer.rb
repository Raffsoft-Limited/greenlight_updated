# app/mailers/signup_mailer.rb
class SignupMailer < ApplicationMailer
  include ApplicationHelper
  include ThemingHelper
  def notify_signup(user_email, activation_type)
    @user_email = user_email
    @activation_type = activation_type
    # mail(to: ['bmpeirwe@gmail.com', 'gndungu@raffsoft.co.ug', 'fwampamba@raffsoft.co.ug', 'iagaba@raffsoft.co.ug'], subject: "New user signed up on Colabo")
    mail(to: ['fwampamba@raffsoft.co.ug'], subject: "New user signed up on Colabo")
  end
end
