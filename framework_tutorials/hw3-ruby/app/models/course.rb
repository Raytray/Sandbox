class Course < ActiveRecord::Base
  belongs_to :instructor
  attr_accessible :name, :number, :instructor_id
end
