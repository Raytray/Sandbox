class CreateCourses < ActiveRecord::Migration
  def change
    create_table :courses do |t|
      t.string :name
      t.integer :number
      t.references :instructor

      t.timestamps
    end
    add_index :courses, :instructor_id
  end
end
