class TimesController < ApplicationController
  def main
  	@time = Time.new.strftime("%a %d, %Y %I:%M %p") #passes the current time to the view

  end
end
