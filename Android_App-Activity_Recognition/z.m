close all
z1=[0.972762652
0.968871546
0.972762652
0.976653669
0.976653669
0.976653669
0.992217801
0.988326835
0.972762652
0.984435779
0.972762652
0.996106453
0.996106453
0.968871546
0.980544762
0.968871546
0.976653669
0.984435779
0.984435779
0.968871546
0.980544762
0.976653669
0.972762652
1
0.991277731
0.976653669
0.976653669
0.968871546
0.968871546
0.968871546
0.984435779
0.980544762
0.993356054
0.984435779
0.980544762
0.980544762
0.976653669
0.984435779
0.984435779
0.980544762
0.980544762
0.980544762
0.976653669
0.972762652
0.984435779
0.980544762
0.980544762
0.976653669
0.984435779
0.972762652
0.972762652
0.976653669
0.976653669
0.980544762
0.984435779
0.968871546
0.992217801
0.972762652
0.968871546
0.961089486
0.968871546
0.980544762
0.968871546
0.961089486
0.984435779
1
0.972762652
0.991277731
0.976653669
0.976653669
0.972762652
0.984435779
0.972762652
0.976653669
0.984435779
0.972762652
0.972762652
0.968871546
0.988326835
0.976653669
0.972762652
0.968871546
0.964980541
0.988326835
0.972762652
0.980544762
0.968871546
0.968871546
0.980544762
0.980544762
0.980544762
0.984435779
0.972762652
0.976653669
0.984435779
0.961089486
0.982195161
0.984435779
0.976653669
0.976653669]
z1=sort(z1,'ascend')
p7=normpdf(z1,0.978141313,0.008100578)
W7=max(p7);
p7=p7/W7;
z2=[-0.594339704
-0.679245381
-0.448113272
1
0.311320737
0.047169815
-0.023584907
-0.08018868
-0.202830201
-0.169811338
0
0.009433963
-0.103773587
-0.023584907
0.127358515
0.084905669
-0.014150945
-0.047169815
-0.037735853
-1.018965658
0.094339628
0.094339628
-0.132075486
-0.287735878
-0.240566053
-0.047169815
0.03301887
-0.056603778
-0.099056607
-0.108490575
-0.108490575
0.014150945
0.146226433
0.193396227
0.231132078
0.259433986
0.287735878
0.042452835
0.061320762
0.127358515
0.193396227
0.69339625
0.696462614
0.533018933
0.283018891
0.21226416
0.21226416
0.334905688
0.509434043
0.594339704
0.514150984
0.386792454
0.349056619
0.509434043
0.292452865
-0.042452835
-0.254717029
-0.08018868
0.122647108
0.150943282
-0.004716982
0.004716982
-0.452830228
-0.627353003
-0.452830228
0.622641489
0.21226416
0.018867926
-0.042452835
-0.018867926
-0.014150945
-0.155658889
-0.188640389
0.075471705
0.066037743
0.046572845
0.075471705
0.132075486
0.153253081
0.018864047
0.028301889
0.066037743
0.037735853
-0.037735853
-0.094339628
-0.136792454
-0.278301919
-0.240566053
-0.028301889
0.08018868
-0.117924536
-0.141509445
-0.094339628
0.023584907
0.122641528
0.113207553
0.113207553
0.249999996
0.311320737
0.235849065]
z2=sort(z2,'ascend')
p8=normpdf(z2,0.045330308,0.294269812)
W8=max(p8);
p8=p8/W8;
z3=[-0.175999985
-0.175999985
-0.131999979
-0.065999993
-0.021999998
0.069999997
0.045999999
-0.004
-0.018
0.065999993
0.206000001
0.369999978
0.625999952
0.747999965
0.701999976
0.555999968
0.365999993
0.128
-0.039999998
-0.032
-0.032
-0.009999999
-0.009999999
-0.009999999
-0.184000001
-0.241999991
-0.049999998
0.257999983
0.427999961
0.383999994
0.36399999
0.560000005
0.857999964
1
0.707999918
0.707999918
0.642000004
0.511999995
0.365999993
0.243999993
0.143999999
0.021999998
-0.087999992
-0.115999986
-0.099999993
-0.032
0.043999996
0.087999992
0.101999996
0.124000002
0.128
0.041999997
-0.018
-0.062000001
-0.052000002
-0.023999999
0.126000004
0.284000007
0.418000008
0.325999965
0.191999997
0.191999997
0.023999999
-0.041999997
-0.041999997
-0.145999989
-0.079999996
-0.019999999
-0.023999999
-0.032
0.052000002
0.131999979
0.167999989
0.213999984
0.297999985
0.423999957
0.537999979
0.549999993
0.547999926
0.385999997
0.385999997
0.173999996
0.063999999
-0.006
-0.045999999
-0.067999995
-0.041999997
-0.013999998
0.029999999
0.069999997
0.087999992
0.087999992
0.118000002
0.079999996
0.016
-0.009999999
-0.075999998
-0.129999996
-0.089999995
0.041999997]
z3=sort(z3,'ascend')
p9=normpdf(z3,0.150739994,0.259335548)
W9=max(p9);
p9=p9/W9;
hold all
plot(z1,p7,'r')
plot(z2,p8,'g')
plot(z3,p9,'b')