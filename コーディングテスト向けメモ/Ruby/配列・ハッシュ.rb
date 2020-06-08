##### ！注意：配列はイコールで繋ぐと、互いに紐づいてしまうらしい。

n = 2
v = ["a","b","c","d","e"]
w = v
x = ["あ","い","う"]
y = w
z = []
z.concat(y)

w.insert(2, x).flatten!
puts "$ w.insert(2, x).flatten!"
print "v = "
p v
print "w = "
p w
print "y = "
p y
print "z = "
p z

# 実行結果
# $ w.insert(2, x).flatten!
# v = ["a", "b", "あ", "い", "う", "c", "d", "e"]
# w = ["a", "b", "あ", "い", "う", "c", "d", "e"]
# y = ["a", "b", "あ", "い", "う", "c", "d", "e"]
# z = ["a", "b", "c", "d", "e"]