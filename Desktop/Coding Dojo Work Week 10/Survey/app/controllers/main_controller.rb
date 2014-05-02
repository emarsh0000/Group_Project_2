class MainController < ApplicationController
  def main
  end

  def result
  	if session[:counter].nil? #if session isn't empty
  		session[:counter] = 1 #this is saving the number for counting

  	else
  		session[:counter] += 1
  		
  	end
  	@counter = session[:counter] #this is sending this info to the view
  	session[:message] = "You have submitted this form " + @counter.to_s + " time(s)"
  	@survey = params[:post] #this will send the info to the view page (the post is to grab only the info we wanted)
  end
 
end
