# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended to check this file into your version control system.

ActiveRecord::Schema.define(:version => 20130918052553) do

  create_table "cake_logs", :force => true do |t|
    t.integer  "user_id"
    t.text     "controller", :limit => 255
    t.text     "function",   :limit => 255
    t.text     "details",    :limit => 255
    t.integer  "theid"
    t.text     "url",        :limit => 255
    t.text     "data"
    t.text     "ipaddr",     :limit => 255
    t.datetime "created"
  end

  add_index "cake_logs", ["user_id"], :name => "user_id"

  create_table "cake_netbadge", :force => true do |t|
    t.integer  "user_id"
    t.text     "ipaddr",   :limit => 255
    t.text     "value",    :limit => 255
    t.boolean  "valid"
    t.datetime "created"
    t.datetime "modified"
  end

  add_index "cake_netbadge", ["user_id"], :name => "user_id"

  create_table "cake_posts", :force => true do |t|
    t.string   "title",    :limit => 50
    t.text     "body"
    t.datetime "created"
    t.datetime "modified"
    t.integer  "user_id"
  end

  create_table "cake_schema_migrations", :id => false, :force => true do |t|
    t.string "version", :null => false
  end

  add_index "cake_schema_migrations", ["version"], :name => "unique_schema_migrations", :unique => true

  create_table "cake_users", :force => true do |t|
    t.string   "username", :limit => 50
    t.string   "password", :limit => 50
    t.string   "role",     :limit => 20
    t.datetime "created"
    t.datetime "modified"
  end

  create_table "comments", :force => true do |t|
    t.string   "commenter"
    t.text     "body"
    t.integer  "post_id"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
  end

  add_index "comments", ["post_id"], :name => "index_comments_on_post_id"

  create_table "courses", :force => true do |t|
    t.string   "name"
    t.integer  "number"
    t.integer  "instructor_id"
    t.datetime "created_at",    :null => false
    t.datetime "updated_at",    :null => false
  end

  add_index "courses", ["instructor_id"], :name => "index_courses_on_instructor_id"

  create_table "instructors", :force => true do |t|
    t.string   "name"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
  end

  create_table "posts", :force => true do |t|
    t.string   "name"
    t.string   "title"
    t.text     "content"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
  end

  create_table "tags", :force => true do |t|
    t.string   "name"
    t.integer  "post_id"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
  end

  add_index "tags", ["post_id"], :name => "index_tags_on_post_id"

  create_table "users", :force => true do |t|
    t.string   "email",                  :default => "", :null => false
    t.string   "encrypted_password",     :default => "", :null => false
    t.string   "reset_password_token"
    t.datetime "reset_password_sent_at"
    t.datetime "remember_created_at"
    t.integer  "sign_in_count",          :default => 0,  :null => false
    t.datetime "current_sign_in_at"
    t.datetime "last_sign_in_at"
    t.string   "current_sign_in_ip"
    t.string   "last_sign_in_ip"
    t.datetime "created_at",                             :null => false
    t.datetime "updated_at",                             :null => false
  end

  add_index "users", ["email"], :name => "index_users_on_email", :unique => true
  add_index "users", ["reset_password_token"], :name => "index_users_on_reset_password_token", :unique => true

end
