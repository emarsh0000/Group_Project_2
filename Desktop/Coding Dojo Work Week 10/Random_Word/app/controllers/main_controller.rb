class MainController < ApplicationController
	def main
		
	end
	def random
		if session[:counter].nil? #if session isn't empty
  			session[:counter] = 1 #this is saving the number for counting

  		else
  			session[:counter] += 1
  		
  		end
  		@counter = session[:counter] #this is sending this info to the view
  		session[:message] = "Random Word (attempt# " + @counter.to_s + ")"
		session[:word] = rand(36**14).to_s(36) #this creates the random 14 character long word
		redirect_to(root_path) #this redirects back to the view page
	end
end
