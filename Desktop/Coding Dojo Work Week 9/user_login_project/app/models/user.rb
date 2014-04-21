class User < ActiveRecord::Base
	validates :first_name, :last_name,
				:presence => true,
				:length => {:minimum => 2}
	validates :email_address,
				:presence => true
	validates :age,
				:presence => true,
				:numericality => {:only_integer => true}
	validates_numericality_of :age, :greater_than => 9, :less_than => 151
end
